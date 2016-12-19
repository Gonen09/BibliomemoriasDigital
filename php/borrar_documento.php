<?php
	if (isset($_POST['id_documento'])) {
		$options = array
		(
			'hostname' => 'localhost',
			'login'    => 'admin',
			'password' => '',
			'port'     => 8983,
			'path'     => 'solr/tesis',
		);
		$client = new SolrClient($options);
		$query_response = $client->deleteByQuery("id_tesis:".$_POST['id_documento']);
		$response = $query_response->getResponse();
		$c = curl_init('http://localhost:8983/solr/admin/cores?action=RELOAD&core=tesis');
		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		$page = curl_exec($c);
		curl_close($c);
	}
?>