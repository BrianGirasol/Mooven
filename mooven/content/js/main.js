$(document).ready(function(){
  $('#searchUser').on('keyup', function(e){
    let username = e.target.value;

    // Obtendo dados do usuário e lista de repositórios do GitHub
    $.ajax({
        url:'https://api.github.com/users/'+username,
        data:{
          client_id:'b9315bcd5a07fcd759d8',
          client_secret:'a2b698bf7e7c02f898197cf136d1a41f704ca8e4'
        }
    }).done(function(user){
      $.ajax({
        url:'https://api.github.com/users/'+username+'/repos',
        data:{
          client_id:'b9315bcd5a07fcd759d8',
          client_secret:'a2b698bf7e7c02f898197cf136d1a41f704ca8e4',
          sort: 'created: asc',
          per_page: 5
        }
      }).done(function(repos){
        $.each(repos, function(index, repo){
          $('.repos').append(`
				<div>
					<span>${repo.name}:</span> ${repo.description} <a href="${repo.html_url}" class="btnRepos" target="_blank">Ver Repositório</a>
				</div>
          `);
        });
      });
      $('.resultado').html(`
			<div>
				<h3>${user.name}</h3>
				<div>
					<img src="${user.avatar_url}">
              		<a href="${user.html_url}" class="btnPerfil" target="_blank">Ver Perfil</a><br><br>
              		<span>Repositórios Públicos:</span> ${user.public_repos}<br>            	 
					<span>Seguidores:</span> ${user.followers}<br>
					<span>Seguindo:</span> ${user.following}<br>
					<span>Empresa:</span> ${user.company}<br>
					<span>Site:</span> <a href="${user.blog}" target="_blank">${user.blog}</a><br>
					<span>Localização:</span> ${user.location}<br>
					<span>Membro Desde:</span> ${user.created_at}
            	</div>				
			</div>
        `);
    });
  });
});