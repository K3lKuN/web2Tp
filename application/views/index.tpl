{include file='./Layout/header.php'}
<body>
	<section>
		{include file='./Layout/navbar.php'}
		<article>
			{block name="article"}
				<p>Ceci est un block</p>
				<a href="{site_url('Welcome/autre')}">aze</a>
			{/block}
		</article>
	</section>
</body>