@extends('master')

@section('title', 'Conditions Générales d\'Utilisation')

@section('header', 'ak-background-type-internal')

@section('content')
<div class="ak-pagetop ak-container">
	<div class="ak-pagetop-child">
		<div class="ak-container container">
			<div>
				<div class="row">
					<div class="col-sm-9">
						<nav>
							<div class="ak-breadcrumb-spacer"></div>
							<div class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
								<a rel="index" class="ak-first" href="{{ route('homepage') }}" itemprop="url">
									<span itemprop="title">Accueil</span>
								</a>
							</div>
						</nav>
					</div>
					<div class="col-sm-3 text-center">
						<span><a class="btn btn-info ak-btn-big ak-btn-play" href="{{ route('join') }}">Jouer !</a></span>    
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container ak-main-container">
	<div class="ak-main-content">
		<div class="ak-main-page">
			<div class="row">
				<div class="main col-md-12">
					<div class="ak-page-header"></div>
					<div class="ak-container ak-main-center">
						<div class="ak-title-container ak-backlink">
							<h1 class="ak-return-link">
								<a><span class="ak-icon-big ak-rules"></span></a>
								Conditions Générales d'Utilisation
							</h1>
						</div>
					</div> 
					<div class="ak-admin-text">
						<div class="ak-item-mid">
							<h2>Article 1 : PRESENTATION DES CGU</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">Ce site internet n'est pas le site officiel de DOFUS, ce site internet n'est en AUCUN CAS affilié à Ankama, ou tout autre fournisseur du jeu DOFUS. <br /><br />En acceptant cet accord, vous devenez responsable de toute action que vous entreprenez sur l'utilisation de ce site internet. Si votre action est en violation avec votre Ètat ou votre pays, notre responsabilité ne pourrai y être engagée de quelques manière que ce soit. Vous pouvez utiliser ce site internet dans le cadre des conditions d'utilisations, sans aucune garantie ou promesse de service. Toute violation de ces conditions résultera en une action en justice. Aucune condition n'est actuellement justifiable, mais les lois de votre pays s'appliquent tout de même. Nous nous réservons le droit de vous refuser l'accès à ce site internet et vous vous engagez à accepter toutes les conditions sur l'utilisation de ce site internet. Le fait de ne pas suivre ces règles se traduira par une perte de service.</p>
							</div>
							<h2>Article 2 : AVIS D'UTILISATION</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">Ce site internet est susceptible de posséder un contenu dont vous n'êtes pas en accord ou que vous ne pouvez pas comprendre. Si vous persister à vouloir naviguer sur ce site internet, sachez que toute personne ou société qui concerne (ou est un partenaire de) Ankama, n'est pas autorisé à voir notre contenu. Toute personne qui révélerait des informations privées de ce site internet à une société/entreprise ou toute entité (y compris Ankama, ou tout autre fournisseur du jeu DOFUS) n'est pas autorisée à afficher le contenu de ce site internet. Ce domaine est une propriété privée et exploité sans aucune application commerciale ou à but lucratif. Si vous utilisez nos liens ou nos téléchargements, vous confirmer et êtes pleinement d'accord à toutes les conditions de ce site internet. En acceptant les conditions d'utilisations, vous acceptez également que les règles, les avis et le contenu peuvent êtres modifiés à tout instant sous la discrétion du webmaster.</p>
							</div>
							<h2>Article 3 : AVIS DE LEGALITE</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">Si une information de ce site internet venait à être divulguée à une société/entreprise ou toute autre entité, cela violerait les termes et conditions de ce site internet. Les informations ainsi obtenues seraient illégales et donc non recevable devant un tribunal. Si ce site internet et/ou ses serveurs serait forcer de fermer, nous ne pourrions être tenus pour responsable de toute perte qui en découle.</p>
							</div>
							<h2>Article 4 : AVIS SUR LES DONATIONS</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">En faisant don au serveur, vous acceptez les règles et conditions d'utilisation du service indiqué ci-dessous. Nous nous réservons le droit d'interdire, de supprimer ou d'effectuer toute action nécessaire si l'un de vos personnages transgresse explicitement ou implicitement les règles inscrites sur le règlement du jeu/forum. Si vous souhaitez effectuer un don, mais ne voulez rien en retour, veuillez nous le préciser par email à {{ config('config.contact') }}. Veuillez également ne pas envoyez d'argent à aucun membre du personnel, mais utilisez uniquement notre site internet, c'est ici le seul endroit où votre argent pourra aider au développement de notre communauté. Nous vous informons que les crédits reçus en jeu suite à vos donations sont valables 6 mois à compter de la date de leur acquisition.</p>
							</div>
							<h2>Article 5 : AVIS SUR LA SECURITE</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">En créant un compte sur le serveur, vous acceptez que la sécurité de celui-ci soit sous votre responsabilité et que vous serez donc tenu pour responsable de toutes les actions qui sont effectuée à destination ou en provenance de votre compte. Vous acceptez également que vous êtes conscients que le fait de donner votre mot de passe peut compromettre la sécurité de votre compte, et qu'en donnant votre mot de passe à une personne tierce, vous en accepter pleinement toutes les conséquences.Vous acceptez de reconnaêtre que si vous recevez un fichier de n'importe où sauf du site internet officiel , il se pourrait qu'il contienne un logiciel malveillant connu sous le nom de "Key Logger", et que ne peut être tenu responsable des conséquences qui surviendrai suite au téléchargement de ce logiciel à partir de sources extérieures.Vous acceptez de reconnaêtre que a pris la plus grande des mesures pour protéger votre compte sur nos serveurs, et que le fait d'être piraté, par définition, est presque impossible et très improbable, vous vous engagez donc à être pleinement responsable si nous ne pouvons confirmer qu'il s'agissait d'une faille venant de votre part.</p>
							</div>
							<h2>Article 6 : AVIS SUR LES COMPTES ET LA SECURITE</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">Comme le compte n'est pas votre propriété, vous ne pouvez le vendre quelque soit les circonstances. Les "Escroqueries" qui pourraient avoir lieu dans le cas d'un commerce ou d'une vente ne seront pas remboursés, et les comptes qui se trouvent avoir été vendus ou échangés seront suspendus indéfiniment et toute les personnes concernées seront bannies de notre réseau.</p>
							</div>
							<h2>Article 7 : AVIS SUR LA PROTECTION DE LA VIE PRIVEE</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">Toutes les informations recueillies sur nos serveurs ne seront divulgués à aucune tierce personne hormis les administrateurs et les maitres du jeu. Nous respectons votre vie privée et nous nous engageons à ne pas consultez vos dialogues ni vos transactions sauf en cas de conflits concernant votre compte ou votre personnage.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection