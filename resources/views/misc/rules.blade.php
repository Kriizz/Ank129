@extends('master')

@section('title', 'Réglement')

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
								Réglement du serveur
							</h1>
						</div>
					</div> 
					<div class="ak-admin-text">
						<div class="ak-item-mid">
							<h2>LES MODERATEURS	</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">Les modérateurs sont des joueurs volontaires qui donnent de leur temps pour servir la communauté et aident à la tenue du forum. Ils sont choisis pour leur connaissance du jeu et leurs capacités à fournir de l’aide aux joueurs. De ce fait ils méritent le même respect que celui dévoué aux Maîtres de Jeu.</p>
							</div>
							<h2>BANNISSEMENT</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">Les bannissements du jeu ne peuvent pas être discutés. Ils peuvent être définifs ou peuvent être sans durés indéterminés. Seuls les Administrateurs, les Maîtres de jeu ainsi que les modérateurs sont en capacités de pouvoir bannir un compte. De ce fait si votre compte se retrouverais bannis, c'est qu'il en a été jugé bon par le membre de l'équipe ayant effectué le bannissement.</p>
							</div>
							<h2>PARTAGE DE COMPTE</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">Le transfert de données à des parties tierces ainsi que le partage d’un compte est strictement interdit. Le propriétaire d’un compte est responsable de toute action réalisée sur et à travers ce compte. Dans le cas d’un partage de compte avéré, le propriétaire du compte encourt des sanctions pouvant aller jusqu’à l’exclusion du jeu, des forums ou même du site internet. <br /><br />De plus, la personne perd le droit d’assistance de la part de l’équipe du serveur.<br /><br /><strong>N.B. : Les Maîtres de jeu (MJ) ne vous demanderont jamais votre mot de passe.</strong></p>
							</div>
							<h2>HARCELEMENT / INSULTE / DIFFAMATION / FRAUDE</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">Le harcèlement ou les insultes envers un autre joueur ou un Maître de jeu sont sanctionnés par une exclusion du jeu, des forums et du site à durée indéterminée. L’équipe du serveur ne peut donner suite à aucune accusation si les captures d’écran ont été modifiées ou représentent des conversations non complètes.<br /><br /> D’autre part, si vous avez rétorqué par des insultes ou à un harcèlement envers l’autre joueur, vous serez aussi sanctionné.</p>
							</div>
							<h2>MENACE</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">Les menaces proférées à l’encontre d’un joueur ou d’un maître de jeu sont sanctionnées par une exclusion du jeu, du forum et du site pour un nombre indéfini de jour à la discrétion de l'équipe du serveur. En cas de récidive, l’exclusion peut être définitive. Lors d’une plainte contre une menace proférée, le joueur doit nous faire parvenir une capture d’écran montrant l’intégralité de la conversation. L’équipe du serveur ne peut donner suite à aucune accusation si les captures d’écran ont été modifiées et/ou représentent des conversations non complètes.</p>
							</div>
							<h2>DEMANDE ABUSIVE ADRESSEE AUX MJ</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">Veuillez vous abstenir de supplier ou de mendier auprès des MJ pour avoir de l’argent, des objets ou autre traitement de faveur. Vous ne recevrez rien de cela. En cas de mendicité, la personne se verra sanctionnée par une exclusion du jeu, des forums et d'une durée indéterminée. En cas de récidive, l’exclusion peut être définitive.</p>
							</div>
							<h2>Griefing</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">Il est interdit de ternir volontairement l'expérience de jeu d'un autre joueur. Cela inclus, les attaques répétées envers un même joueur (bashing), ainsi que le vol des cibles appartenant à un autre joueur (kill stealing). Si un joueur veut nous informer de griefing, il devra nous envoyer une capture d’écran et une description des faits. Le griefing peut entraîner une suspension du jeu, du forum et du site d'une durée indéterminée.</p>
							</div>
							<h2>TRICHERIE / EXPLOITATION DE BUGS</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">L’utilisation de bugs ou l'exploitation d'une quelconque faille du logiciel afin d’obtenir un avantage sont sanctionnées et peuvent entraîner une exclusion du jeu, des forums et du site. <br /><br />Tout joueur menaçant un autre joueur de mener une action sur son compte via un « ami » MJ sera sanctionné par une exclusion du jeu, des forums et du site. En cas de récidive, l’exclusion peut être définitive. <br /><br />En effet, un MJ n’utilisera jamais ses droits pour donner un traitement de faveur à un joueur en particulier.</p>
							</div>
							<h2>FAUX RAPPORTS</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">La soumission d’une plainte invalide et/ou fausse aux maîtres de jeu est sanctionnée par une exclusion du jeu, des forums et du site d'une durée indéterminée. En cas de récidive, l’exclusion peut être définitive.</p>
							</div>
							<h2>USURPATION D'IDENTITE</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">Toute personne se faisant passer à tord pour un maître de jeu (MJ), un membre de l’équipe ou affirmant parler en leur nom afin d’obtenir des informations personnelles de la part d’autres joueurs sera sanctionnée par une exclusion définitive du jeu, des forums et du site.</p>
							</div>
							<h2>INSTRUCTIONS DONNEES PAR UN MJ</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">Les joueurs se doivent de suivre toutes les instructions données par un MJ sur le serveur. Tout joueur ne respectant pas cette règle sera sanctionné par une exclusion du jeu, des forums et du site d'une durée indéterminée. En cas de récidive, l’exclusion peut être définitive.</p>
							</div>
							<h2>PUBLICITE</h2>
							<div style="text-align: justify;">
								<p style="text-align:justify">Il est interdit de s’adonner à toute forme de publicité sous peine d’une exclusion du jeu, des forums et du site internet d'une durée indéterminée. En cas de récidive, l’exclusion pourra être définitive. Il est évidemment permis aux joueurs de parler de sites de fans ou de communauté mais ceci doit se faire en accord avec les conditions explicitées ci-dessus concernant entre autres le spamming.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection