<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
     <!-- meta -->
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Jonathan Bonenfant | Tp2</title>
     <meta name="description" content="Forum">

     <!-- styles -->
     <link rel="stylesheet" type="text/css" href="./resources/css/Main.css">

     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <head>
 <body>
      <!-- Header -->
  <div class="container">
		<nav class="">
			<!-- Logo -->
	       <div class="nav__container">
	           <div class=" wrapper header">
					<!-- Menu-->
                    <a href="?module=base&action=index" class="primary-links">Accueil</a>
					<div class="dropdown">
						<button class="primary-links">Catégorie</button>
						<div class="dropdown-menu">
							<a href="?module=article&action=fastfood" class="primary-links">FastFood</a>
							<a href="?module=article&action=asiatique" class="primary-links">Asiatique</a>
							<a href="?module=article&action=pizza" class="primary-links">Pizza</a>
							<a href="?module=article&action=autres" class="primary-links">Autres</a>
						</div>
					</div>
					<a href="?module=login&action=login" class="primary-links">Login</a>
					<a href="?module=user&action=adduser" class="primary-links btn3">Sign up</a>
	           </div>
	       </div>
		</nav>
	</div>
    <!-- Contenu reçu par php-->
    <div class="">
    <?php echo $content; ?>
    </div>
 <body>
</html>
