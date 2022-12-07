infos pour le TD3: 
avoir : https://127.0.0.1/series/poster/{id}

public function poster(Series $sseries): Response
{
	retunr new Response(stream_get_contents($serie->getPoster()), 200, array( 'Content-type' = > 'image/jpeg',));
}
