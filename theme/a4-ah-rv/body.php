<header id="header">
    <!-- Le titre du mémoire / doc écrit -->
    <h1><?= $title ?></h1>

    <!-- Le sous-titre éventuel (si pas de sous-titre, supprimer le h2) -->
    <h2><?= $subtitle ?></h2>

    <!-- le titre courant (version print) -->
    <div class="runningtitle">
        
        <div><?= $title ?></div>
        <span class="folio"></span>

    </div>

    <!-- le folio courant (version print) -->
    <div class="runningfolio">
        <!-- Logo ÉSAD Pyrénées -->
        <!-- <img src="/css/logo.png" alt="ESAD Pyrénées"> -->
        <!-- Votre diplôme -->
        
    </div>

    <!-- les méta-données -->
    <div class="meta">
        <!-- Votre nom -->
        <div class="meta-name">
            <?= $student['thesis']?> by <a href="<?=$student['link']?>" target="_blank"><?= $student['name']?></a><br>    
            Tutored by <a href="<?=$tuteur['link']?>" target="_blank"><?= $tuteur['name']?></a>    
        </div>
        <div class="meta-data">
            <p>
                <a target="_blank" href="<?= $ecole['link'] ?>"><?= $ecole['name'] ?></a>, <?= $year ?><br>
                <?= $diploma ?> <br> 
                
            </p>
        </div>
        
        <!-- l’année YYYY – YYYY  -->
        <div class="meta-year">Read online <br> <a href="<?=$www?>"><?=$www?></a></div>
    </div>

    <!-- les liens rapides: lire, imprimmer, télécharger -->
    <nav id="quicklinks">
        <a href="#nav">Read online</a>
        <!-- supprimer ce lien une fois le PDF généré : -->
        <a href="?print" title="Web to print">Print A4</a>
        <!-- Modifier l’URL dans config.php -->
        <a href="<?= $pdf ?>">Download</a>
        <a href="https://github.com/AmauryHamon/masterthesis-web2print/issues" target="_blank">Edit</a>
    </nav>
</header>

<!-- la navigation (= le sommaire) -->
<br class="breakpage">
<nav id="nav">
    <h2>Table of Contents</h2>
    <ul class="nav-ul">
        <?= $nav() ?>
    </ul>
</nav>
<br class="breakpage">

<main id="main">
    <!-- le contenu -->      
    <?= $html() ?>
</main>