<div class="row" data-id="<?php echo $data['id']; ?>">
	<div class="title"><?php echo $data['title']; ?></div>
	<div class="description"><?php echo $data['description']; ?></div>
	<div class="parent_id">
		<span><?php echo $data['all_objects_formatted'][$data['parent_id']]['title']; ?></span>
		
		<?php if( $data['admin'] === true ): ?>
		
			<div class="actions">
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="16" height="16" x="0" y="0" viewBox="0 0 512 511" style="enable-background:new 0 0 512 512" xml:space="preserve" class="edit-data">
					<g>
						<path xmlns="http://www.w3.org/2000/svg" d="m405.332031 256.484375c-11.796875 0-21.332031 9.558594-21.332031 21.332031v170.667969c0 11.753906-9.558594 21.332031-21.332031 21.332031h-298.667969c-11.777344 0-21.332031-9.578125-21.332031-21.332031v-298.667969c0-11.753906 9.554687-21.332031 21.332031-21.332031h170.667969c11.796875 0 21.332031-9.558594 21.332031-21.332031 0-11.777344-9.535156-21.335938-21.332031-21.335938h-170.667969c-35.285156 0-64 28.714844-64 64v298.667969c0 35.285156 28.714844 64 64 64h298.667969c35.285156 0 64-28.714844 64-64v-170.667969c0-11.796875-9.539063-21.332031-21.335938-21.332031zm0 0" class=""></path>
						<path xmlns="http://www.w3.org/2000/svg" d="m200.019531 237.050781c-1.492187 1.492188-2.496093 3.390625-2.921875 5.4375l-15.082031 75.4375c-.703125 3.496094.40625 7.101563 2.921875 9.640625 2.027344 2.027344 4.757812 3.113282 7.554688 3.113282.679687 0 1.386718-.0625 2.089843-.210938l75.414063-15.082031c2.089844-.429688 3.988281-1.429688 5.460937-2.925781l168.789063-168.789063-75.414063-75.410156zm0 0" class=""></path>
						<path xmlns="http://www.w3.org/2000/svg" d="m496.382812 16.101562c-20.796874-20.800781-54.632812-20.800781-75.414062 0l-29.523438 29.523438 75.414063 75.414062 29.523437-29.527343c10.070313-10.046875 15.617188-23.445313 15.617188-37.695313s-5.546875-27.648437-15.617188-37.714844zm0 0" class=""></path>
					</g>
				</svg>
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="16" height="16" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="delete-data">
					<g>
						<path xmlns="http://www.w3.org/2000/svg" d="M19,7a1,1,0,0,0-1,1V19.191A1.92,1.92,0,0,1,15.99,21H8.01A1.92,1.92,0,0,1,6,19.191V8A1,1,0,0,0,4,8V19.191A3.918,3.918,0,0,0,8.01,23h7.98A3.918,3.918,0,0,0,20,19.191V8A1,1,0,0,0,19,7Z"></path>
						<path xmlns="http://www.w3.org/2000/svg" d="M20,4H16V2a1,1,0,0,0-1-1H9A1,1,0,0,0,8,2V4H4A1,1,0,0,0,4,6H20a1,1,0,0,0,0-2ZM10,4V3h4V4Z"></path>
						<path xmlns="http://www.w3.org/2000/svg" d="M11,17V10a1,1,0,0,0-2,0v7a1,1,0,0,0,2,0Z"></path>
						<path xmlns="http://www.w3.org/2000/svg" d="M15,17V10a1,1,0,0,0-2,0v7a1,1,0,0,0,2,0Z"></path>
					</g>
				</svg>
			</div>
			
		<?php endif; ?>
	</div>
</div>