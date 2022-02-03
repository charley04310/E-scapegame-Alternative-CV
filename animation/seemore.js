var MesID = new Array("article-social", "article-djak", "article-2A","article-cbd", "article-cbd-share", "article-aqua", "article-pts", "article-cesi-w", "marc-djak", "marc-feedback-djak");

function SeeMore(id){
// Long text
var text = document.getElementById(id).innerHTML;

// Character limit after which "Read More" will be seen
var char_limit = 180;

if(text.length < char_limit)
document.getElementById(id).innerHTML = '<div> ' + text + '</div>' ;

else
document.getElementById(id).innerHTML  =  '<div><span class="short-text">' + text.substr(0, char_limit) + '</span><span class="long-text">' + text.substr(char_limit) + '</span><span class="text-dots">...</span><span class="show-more-button" data-more="0">Voir plus</span></div>' ;

}

for(var i = 0; i < MesID.length; i++){
    SeeMore(MesID[i]);

}

// SCRIPT pour afficher les textes trop long style commentaires/articles

var btnprod = document.getElementsByClassName("show-more-button"); 
for (var i = 0; i < btnprod.length; i++) {
	btnprod[i].onclick = function() {
		// If text is shown less, then show complete
		if(this.getAttribute('data-more') == 0) {
			this.setAttribute('data-more', 1);
			this.style.display = 'inline-block';
			this.innerHTML = 'Voir moins';

			this.previousElementSibling.style.display = 'none';
			this.previousElementSibling.previousElementSibling.style.display = 'inline';
		}
		// If text is shown complete, then show less
		else if(this.getAttribute('data-more') == 1) {
			this.setAttribute('data-more', 0);
			this.style.display = 'inline';
			this.innerHTML = 'Voir plus';

			this.previousElementSibling.style.display = 'inline';
			this.previousElementSibling.previousElementSibling.style.display = 'none';
		}	
	}

};

// SCRIPT pour afficher les textes trop long style commentaires/articles

