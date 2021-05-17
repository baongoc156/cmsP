// Custom JS for CT White

const searchField = document.getElementById('top_search_field'),
		searchBtn = document.getElementById('search-btn'),
		  toField = document.querySelector('.jump-to-field'),
		   toIcon = document.querySelector('.jump-to-icon')
		
searchField.style.display = 'none'
		
if (undefined !== searchBtn && undefined !== searchField) {
	
	searchBtn.addEventListener('click', () => {
		
		searchField.style.display = (searchField.style.display === 'none') ? 'block' : 'none'
		
		if (searchField.style.display === 'block') {
			searchField.focus()
			toField.tabIndex = '0'
			 toIcon.tabIndex = '0'
		}
		else {
			toField.tabIndex = '-1'
			 toIcon.tabIndex = '-1'
		}
	})
	
	toField.onfocus = () => {
		searchField.focus()
	}
	
	toIcon.onfocus = () => {
		searchBtn.focus()
	}
}