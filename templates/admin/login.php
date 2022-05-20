<?php 
$header_title = 'Авторизация';

include_once( TEMPLATEPATH . '/templates/header.php' );
?>

	<div class="login-form-env">
		<form action="/admin/" method="post">
			<h3>Вход в админ панель</h3>
			<div class="field-group">
				<input type="text" name="login" placeholder="Введите логин" required/>
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="16" height="16" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths">
					<g>
						<g xmlns="http://www.w3.org/2000/svg">
							<g>
								<path d="M437.02,330.98c-27.883-27.882-61.071-48.523-97.281-61.018C378.521,243.251,404,198.548,404,148    C404,66.393,337.607,0,256,0S108,66.393,108,148c0,50.548,25.479,95.251,64.262,121.962    c-36.21,12.495-69.398,33.136-97.281,61.018C26.629,379.333,0,443.62,0,512h40c0-119.103,96.897-216,216-216s216,96.897,216,216    h40C512,443.62,485.371,379.333,437.02,330.98z M256,256c-59.551,0-108-48.448-108-108S196.449,40,256,40    c59.551,0,108,48.448,108,108S315.551,256,256,256z" fill="#000000" data-original="#000000" class="hovered-path"></path>
							</g>
						</g>
						<g xmlns="http://www.w3.org/2000/svg">
						</g>
						<g xmlns="http://www.w3.org/2000/svg">
						</g>
						<g xmlns="http://www.w3.org/2000/svg">
						</g>
						<g xmlns="http://www.w3.org/2000/svg">
						</g>
						<g xmlns="http://www.w3.org/2000/svg">
						</g>
						<g xmlns="http://www.w3.org/2000/svg">
						</g>
						<g xmlns="http://www.w3.org/2000/svg">
						</g>
						<g xmlns="http://www.w3.org/2000/svg">
						</g>
						<g xmlns="http://www.w3.org/2000/svg">
						</g>
						<g xmlns="http://www.w3.org/2000/svg">
						</g>
						<g xmlns="http://www.w3.org/2000/svg">
						</g>
						<g xmlns="http://www.w3.org/2000/svg">
						</g>
						<g xmlns="http://www.w3.org/2000/svg">
						</g>
						<g xmlns="http://www.w3.org/2000/svg">
						</g>
						<g xmlns="http://www.w3.org/2000/svg">
						</g>
					</g>
				</svg>
			</div>
			
			<div class="field-group">
				<input type="password" name="pass" placeholder="Введите пароль" required/>
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="16" height="16" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
					<g>
						<g xmlns="http://www.w3.org/2000/svg">
							<path d="m459.669 82.906-196-81.377c-4.91-2.038-10.429-2.039-15.338 0l-196 81.377c-7.465 3.1-12.331 10.388-12.331 18.471v98.925c0 136.213 82.329 258.74 208.442 310.215 4.844 1.977 10.271 1.977 15.116 0 126.111-51.474 208.442-174.001 208.442-310.215v-98.925c0-8.083-4.865-15.371-12.331-18.471zm-27.669 117.396c0 115.795-68 222.392-176 269.974-105.114-46.311-176-151.041-176-269.974v-85.573l176-73.074 176 73.074zm-198.106 67.414 85.964-85.963c7.81-7.81 20.473-7.811 28.284 0s7.81 20.474-.001 28.284l-100.105 100.105c-7.812 7.812-20.475 7.809-28.284 0l-55.894-55.894c-7.811-7.811-7.811-20.474 0-28.284s20.474-7.811 28.284 0z" fill="#000000" data-original="#000000" class=""></path>
						</g>
					</g>
				</svg>
			</div>
			<div class="form-footer">
				<button type="submit" class="btn-1">Войти</button>
			</div>
		</form>
	</div>

<?php

include_once( TEMPLATEPATH . '/templates/footer.php' );

?>