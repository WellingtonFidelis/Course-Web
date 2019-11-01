    var nomeCanal = 'portadosfundos';
    var upload_id;

    $(document).ready( function () {
        $.get("https://www.googleapis.com/youtube/v3/channels",{
            part: 'contentDetails',
            forUsername: nomeCanal,
            key: 'AIzaSyBfF--i85Gtzs_U43aHk4sqz7R7HWqx7FI'},
             function(data) {
            upload_id = data.items[0].contentDetails.relatedPlaylists.uploads;
            pegarVideos(upload_id);
        }
             )
        function pegarVideos(id) {
            $.get("https://www.googleapis.com/youtube/v3/playlistItems", {
                part: 'snippet',
                maxResults: 12,
                playlistId: id,
                key: 'AIzaSyBfF--i85Gtzs_U43aHk4sqz7R7HWqx7FI'},
                  function(data) {
                var imagem;
                var arquivo;

                //console.log(data);// para enxergar todos os elementos 

                $.each(data.items, function(i, item) {
                    imagem = item.snippet.thumbnails.medium.url;
                    titulo = item.snippet.title;
                    descricao = item.snippet.description;
                    data_publicada = formatarData(item.snippet.publishedAt);
                    videoId = item.snippet.resourceId.videoId;
                    arquivo = '<li class="principal"> <a class="fancybox-media" href="https://www.youtube.com/watch?v=' + videoId + '"> <div class="foto"><img src="' + imagem + '"/><div class="legenda"><h5>' + titulo + '</h5><p>Data: ' + data_publicada + '</p></div></div></a> </li>';
                    $('div#janela ul').append(arquivo);
                });
                }
            )
        }
        
        function formatarData (data) {
            return data.substr(8,2) + '/' + data.substr(5,2) + '/' + data.substr(0,4);
        }
        
    });
