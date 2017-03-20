<div class="page" id="page-moon" >
	<style>
		canvas { width: 100%; height: 100% }
	</style>	
	<div id="moon-title" style="
		position: absolute;
		top: 10px;
		width: 100%;
		text-align: center;
		z-index: 100;
		display:block;
	">
		<h1>Phases of the Moon</h1>
		<hr width="50%">
	</div>
	<div id="moon-info" style="
		position: absolute;
		top: 20%;
		right: 20%;
		width: 35%;
		text-align: left;
		z-index: 100;
		display:block;
	">
	
		<div class="card z-depth-5 blue-grey darken-4" >
			<div class="card-content">
				<span class="card-title ">Full Moon</span>
			</div>
		</div>
	</div>
	<div id="moon-menu" style="
		position: absolute;
		bottom: 10%;
		width: 100%;
		text-align: center;
		z-index: 100;
		display:block;
	">
        <a class="btn waves-effect waves-light blue-grey darken-4" onclick="setSunAngle(270, 'New Moon');">New Moon</a>
        <a class="btn waves-effect waves-light blue-grey darken-4" onclick="setSunAngle(225, 'Waxing Crescent');">Waxing Crescent</a>
        <a class="btn waves-effect waves-light blue-grey darken-4" onclick="setSunAngle(180, 'First Quarter');">First Quarter</a>
        <a class="btn waves-effect waves-light blue-grey darken-4" onclick="setSunAngle(135, 'Waxing Gibbous');">Waxing Gibbous</a>
		<a class="btn waves-effect waves-light blue-grey darken-4" onclick="setSunAngle(90, 'Full Moon');">Full Moon</a>
		<a class="btn waves-effect waves-light blue-grey darken-4" onclick="setSunAngle(45, 'Waning Gibbous');">Waning Gibbous</a>
        <a class="btn waves-effect waves-light blue-grey darken-4" onclick="setSunAngle(0, 'Third Quarter');" >Third Quarter</a>
        <a class="btn waves-effect waves-light blue-grey darken-4" onclick="setSunAngle(-45, 'Waning Crescent');">Waning Crescent</a>
	</div>
	<div id="moon-renderer" style="z-index: 99;">
	</div>
	<script>
		var camera, scene, renderer;
		var sunLight, hemiLight, lensFlare;
		var renderScale = 0.5;
		var moonMesh, occMesh;
		var distance = 32;
		var deg2rad = Math.PI/180;
		var rad2deg = 180/Math.PI;
		var selang = 90*deg2rad;
		var curang = selang;
		var selangtarg = 90*deg2rad;
		var percent = 1.0;
		var phase = 'New Moon';
		function setSunAngle(deg, phases){
			deg += 72.645975 - 90;
			curang = selang;
			selangtarg = deg*deg2rad;
			percent = 0;
			phase = phases;
		}
		var angle = 0;
		var speed = 0.25*deg2rad;
		
		initMoon();
		renderMoon();
		function initMoon(){
			camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 0.1, 1000 );
			camera.position.x = 5;
			camera.position.y = 0;
			camera.position.z = 16;
			
			scene = new THREE.Scene();
			
			hemiLight = new THREE.HemisphereLight( 0xddeeff, 0x0f0e0d, 0.02 );
			hemiLight.intensity = 0.5;
			scene.add( hemiLight );
				
			var textureLoader = new THREE.TextureLoader();
			var moonMat = new THREE.MeshStandardMaterial( {
				color: 0xffffff,
				roughness: 0.5,
				metalness: 1.0
			});
			textureLoader.load( "public/assets/images/moon/moon_1024.jpg", function( map ) {
				map.anisotropy = 1;
				moonMat.map = map;
				moonMat.metalnessMap = map;
				moonMat.needsUpdate = true;
			} );
			
			
			var moonGeo = new THREE.SphereGeometry( 3, 32, 32 );
			moonMesh = new THREE.Mesh( moonGeo, moonMat );
			moonMesh.position.set( 0, 0, 0);
			//moonMesh.rotation.z = Math.PI/2;
			moonMesh.castShadow = true;
			scene.add( moonMesh );
			
			var sunGeo = new THREE.SphereGeometry(0.5, 32, 32);
			sunLight = new THREE.PointLight(0xffffff, 2, 2000);
			sunLight.color.setHSL( 0.995, 0.5, 0.9);
			/*var sunMat = new THREE.MeshStandardMaterial({
				emissive: 0xffffff,
				emissiveIntensity: 10,
				color: 0x000000
			});
			
			sunLight.add(new THREE.Mesh(sunGeo, sunMat));
			sunMat.emissiveIntensity = sunLight.intensity / Math.pow( 0.02, 2.0 )*/
			sunLight.position.set(distance, 0, 0);
			sunLight.power = 20000;
			sunLight.castShadow = true;
			
			scene.add(sunLight);
			var textureFlare = textureLoader.load( "public/assets/images/moon/lensflare0.png" );
			var textureFlare2 = textureLoader.load( "public/assets/images/moon/lensflare2.png" );
			var textureFlare3 = textureLoader.load( "public/assets/images/moon/lensflare3.png" );

			var flareColor = new THREE.Color( 0xffffff );
			flareColor.setHSL( 0.995, 0.5, 1.4 );

			lensFlare = new THREE.LensFlare( textureFlare, 700, 0.0, THREE.AdditiveBlending, flareColor );
			
			lensFlare.add( textureFlare2, 512, 0.0, THREE.AdditiveBlending );
			lensFlare.add( textureFlare2, 512, 0.0, THREE.AdditiveBlending );
			lensFlare.add( textureFlare2, 512, 0.0, THREE.AdditiveBlending );
			lensFlare.add( textureFlare3, 60, 0.6, THREE.AdditiveBlending );
			lensFlare.add( textureFlare3, 70, 0.7, THREE.AdditiveBlending );
			lensFlare.add( textureFlare3, 120, 0.9, THREE.AdditiveBlending );
			lensFlare.add( textureFlare3, 70, 1.0, THREE.AdditiveBlending );
			lensFlare.customUpdateCallback = lensFlareUpdateCallback;
			lensFlare.position.copy( sunLight.position );

			scene.add( lensFlare );
			
			renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
			renderer.setSize( window.innerWidth, window.innerHeight );
			renderer.physicallyCorrectLights = true;
			renderer.gammaInput = true;
			renderer.gammaOutput = true;
			renderer.shadowMap.enabled = true;
			renderer.setPixelRatio( window.devicePixelRatio );
			renderer.toneMappingExposure = Math.pow(0.68, 5.0);
			
			$('#moon-renderer').append(renderer.domElement);
			
			
			window.addEventListener( 'resize', onWindowResize, false );
		}
		function lensFlareUpdateCallback( object ) {
				var f, fl = object.lensFlares.length;
				var flare;
				var vecX = -object.positionScreen.x * 2;
				var vecY = -object.positionScreen.y * 2;
				for( f = 0; f < fl; f++ ) {
					flare = object.lensFlares[ f ];
					flare.x = object.positionScreen.x + vecX * flare.distance;
					flare.y = object.positionScreen.y + vecY * flare.distance;
					flare.rotation = 0;
				}
				object.lensFlares[ 2 ].y += 0.025;
				object.lensFlares[ 3 ].rotation = object.positionScreen.x * 0.5 + THREE.Math.degToRad( 45 );
			}
		function onWindowResize() {
			renderer.setSize( window.innerWidth, window.innerHeight );
			camera.aspect = window.innerWidth / window.innerHeight;
			camera.updateProjectionMatrix();
			
		}
		function renderMoon(){
			requestAnimationFrame( renderMoon );
			angle += speed*2;
			if(percent <= 1.0){
				percent += 0.01;
				mid = (selangtarg-curang)*0.7 + curang;
				selang = curang + 2.*(mid-curang)*percent + (selangtarg -2.*mid + curang)*percent*percent;
			}
			else{
				$('#moon-info .card .card-content .card-title').text(phase);
			}
			//selang = angle;
			sunLight.position.x = distance*Math.cos(selang);
			sunLight.position.z = distance*Math.sin(selang);
			lensFlare.position.copy(sunLight.position);
			moonMesh.rotation.y = -angle*2;
			renderer.render(scene, camera);
			
		}
	
	</script>
</div>