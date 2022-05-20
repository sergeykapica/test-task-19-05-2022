<?php

$header_title = 'Админ панель';

include_once( TEMPLATEPATH . '/templates/header.php' );

$db = new \core\DB();
$all_objects = $db->get_all_objects();
$three = [];
$three_formatted = [];
$all_objects_formatted = [];

if( $all_objects ) {
	
	foreach( $all_objects as $object ) {
		
		$three[ $object['parent_id'] ] [ $object['id'] ] = $object;
	}

	foreach( $all_objects as $object ) {
		
		$all_objects_formatted[ $object['id'] ] = $object;
	}
}

$all_objects_formatted[0]['title'] = 'Корневой';
$element_data = ['all_objects_formatted' => $all_objects_formatted];
$element_data['admin'] = true;
?>

	<div class="admin-area">
		<div class="admin-header">
			<h2>Админ панель</h2>
			<a href="/admin/logout" class="link">Выход</a>
		</div>
		<div class="action-env">
			<a href="/admin/add">
				<button type="button" class="btn-1">Добавить запись</button>
			</a>
		</div>
		<div class="data-env">
			<form action="/admin/" method="post" id="data-form">
				<?php if( isset( $three[0] ) ): ?>
					<?php \core\DataHandler::recursiveThree( $three[0], $three, false, true, $element_data ); ?>
					<button type="submit" class="btn-1">Обновить</button>
					
					<?php if( isset( $data['response'] ) ): ?>
					
						<?php if( $data['response'] === true ): ?>
					
							<div class="form-response success">
								<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="16" height="16" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
									<g>
										<g xmlns="http://www.w3.org/2000/svg">
											<g>
												<path d="M497.36,69.995c-7.532-7.545-19.753-7.558-27.285-0.032L238.582,300.845l-83.522-90.713    c-7.217-7.834-19.419-8.342-27.266-1.126c-7.841,7.217-8.343,19.425-1.126,27.266l97.126,105.481    c3.557,3.866,8.535,6.111,13.784,6.22c0.141,0.006,0.277,0.006,0.412,0.006c5.101,0,10.008-2.026,13.623-5.628L497.322,97.286    C504.873,89.761,504.886,77.54,497.36,69.995z" class=""></path>
											</g>
										</g>
										<g xmlns="http://www.w3.org/2000/svg">
											<g>
												<path d="M492.703,236.703c-10.658,0-19.296,8.638-19.296,19.297c0,119.883-97.524,217.407-217.407,217.407    c-119.876,0-217.407-97.524-217.407-217.407c0-119.876,97.531-217.407,217.407-217.407c10.658,0,19.297-8.638,19.297-19.296    C275.297,8.638,266.658,0,256,0C114.84,0,0,114.84,0,256c0,141.154,114.84,256,256,256c141.154,0,256-114.846,256-256    C512,245.342,503.362,236.703,492.703,236.703z" class=""></path>
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
								<span>Запись успешно изменена</span>
							</div>
							
						<?php else: ?>
						
							<div class="form-response failed">
								<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="16" height="16" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
									<g>
										<path xmlns="http://www.w3.org/2000/svg" d="m16 32c-8.822 0-16-7.178-16-16s7.178-16 16-16 16 7.178 16 16-7.178 16-16 16zm0-30c-7.72 0-14 6.28-14 14s6.28 14 14 14 14-6.28 14-14-6.28-14-14-14zm5.126 20.15c-.257 0-.513-.098-.709-.294l-4.42-4.442-4.441 4.421c-.393.389-1.025.387-1.415-.003-.389-.392-.388-1.025.003-1.415l4.442-4.42-4.421-4.441c-.389-.392-.388-1.025.003-1.415.392-.39 1.024-.388 1.415.003l4.42 4.442 4.441-4.421c.392-.39 1.024-.388 1.415.003.389.392.388 1.025-.003 1.415l-4.442 4.42 4.421 4.441c.389.392.388 1.025-.003 1.415-.196.194-.451.291-.706.291z"></path>
									</g>
								</svg>
								<span>При изменении записи возникла ошибка</span>
							</div>
						
						<?php endif; ?>
						
					<?php endif; ?>
					
				<?php else: ?>
				
					<span>Корневые записи отсутствуют</span>
					
				<?php endif; ?>
			</form>
		</div>
	</div>
	
	<script>
		window.onload = function() {
						
			let rows = document.querySelectorAll('.data-env .row:not(.header)');
			let rowCount = 0;
			
			for( row of rows ) {
				
				row.onclick = function( e ) {
					
					let container = this;
					let target = e.target;
					let action;
					
					if( target.tagName === 'path' || target.tagName === 'g' ) {
						
						target = target.closest('svg');

						if( target.classList.contains('edit-data') ) {
							
							action = 'edit';
						}
						else
						{
							action = 'delete';
						}
					}
					else if( target.classList.contains('edit-data') ) {
						
						action = 'edit';
					}
					else if( target.classList.contains('delete-data') )
					{
						action = 'delete';
					}
					
					if( action && action === 'edit' && !container.classList.contains('editable') ) {
						
						container.classList.add('editable');
						
						let title = this.querySelector('.title');
						title.innerHTML = "<input type='text' name='edit[" + container.getAttribute('data-id') + "][title]' value='" + title.innerText + "'/>";
						
						let description = this.querySelector('.description');
						description.innerHTML = "<input type='text' name='edit[" + container.getAttribute('data-id') + "][description]' value='" + description.innerText + "'/>";
						
						let parent_id = this.querySelector('.parent_id');
						let parent_ids = '<select name="edit[' + container.getAttribute('data-id') + '][parent_id]"><option value="0" ' + ( parent_id.innerText === 'Корневой' ? 'selected' : '' ) + '>Корневой</option>';
						let all_objects = JSON.parse( '<?php echo json_encode( $all_objects ); ?>' );
						
						for( let object of all_objects ) {
							
							parent_ids += '<option value="' + object.id + '" ' + ( object.title === parent_id.innerText ? 'selected' : '' ) + '>' + object.title + '</option>';
						}
						
						parent_ids += '</select>';
						parent_id.innerHTML = parent_ids;
					}
					else if( action && action === 'delete' ) {
						
						container.innerHTML = '<input type="hidden" name="delete" value="' + container.getAttribute('data-id') + '"/>';
						document.querySelector('#data-form').submit();
					}
				};
			}
		};
	</script>

<?php

include_once( TEMPLATEPATH . '/templates/footer.php' );

?>