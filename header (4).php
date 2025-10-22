<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <nav>
        <a href="<?php echo home_url(); ?>" class="logo">HORROR FILM HISTORY</a>
        
        <div class="search-box">
            <input type="text" class="search-input" placeholder="Search..." id="searchInput">
            <span class="search-icon" onclick="performSearch()">🔍</span>
        </div>
        
        <button class="mobile-toggle" onclick="toggleMenu()">☰</button>
        
        <ul class="nav-links" id="mainNav">
            <li>
                <button onclick="toggleDropdown(this)">Decades ▼</button>
                <ul class="dropdown">
                    <li><a href="<?php echo home_url('/silent-horror-movies/'); ?>">1896-1910 Silent Shorts</a></li>
                    <li><a href="<?php echo home_url('/1920s-silent-horror-movies/'); ?>">1920s Silent Era</a></li>
                    <li><a href="<?php echo home_url('/1930s-horror/'); ?>">1930s Universal Monsters</a></li>
                    <li><a href="<?php echo home_url('/1940s-horror/'); ?>">1940s Psychological Horror</a></li>
                    <li><a href="<?php echo home_url('/1950s-horror/'); ?>">1950s Atomic Age</a></li>
                    <li><a href="<?php echo home_url('/1960s-horror/'); ?>">1960s Psycho Killers</a></li>
                    <li><a href="<?php echo home_url('/1970s-horror/'); ?>">1970s Horror Comes Home</a></li>
                    <li><a href="<?php echo home_url('/1980s-horror-movies/'); ?>">1980s Carnival of Excess</a></li>
                    <li><a href="<?php echo home_url('/1990s-horror-movies/'); ?>">1990s Self-Awareness</a></li>
                    <li><a href="<?php echo home_url('/2000s-horror-movies/'); ?>">2000s Global Terror</a></li>
                    <li><a href="<?php echo home_url('/2010s-horror/'); ?>">2010s Elevated Horror</a></li>
                </ul>
            </li>
            <li>
                <button onclick="toggleDropdown(this)">Subgenres ▼</button>
                <ul class="dropdown">
                    <li><a href="<?php echo home_url('/tag/aliens/'); ?>">Aliens</a></li>
                    <li><a href="<?php echo home_url('/tag/creature/'); ?>">Creature</a></li>
                    <li><a href="<?php echo home_url('/tag/demons/'); ?>">Demons</a></li>
                    <li><a href="<?php echo home_url('/tag/haunted-house/'); ?>">Haunted House</a></li>
                    <li><a href="<?php echo home_url('/tag/psychological/'); ?>">Psychological</a></li>
                    <li><a href="<?php echo home_url('/tag/slasher/'); ?>">Slasher</a></li>
                    <li><a href="<?php echo home_url('/tag/suburbia/'); ?>">Suburbia</a></li>
                    <li><a href="<?php echo home_url('/tag/vampires/'); ?>">Vampires</a></li>
                    <li><a href="<?php echo home_url('/tag/zombies/'); ?>">Zombies</a></li>
                </ul>
            </li>
            <li><a href="<?php echo home_url('/about/'); ?>">About</a></li>
            <li><button class="random-btn" onclick="randomFilm()" title="Random Film">🎲</button></li>
        </ul>
    </nav>
</header>

<div id="page" class="site">
    <div id="content" class="site-content">

<script>
function toggleMenu() {
    document.getElementById('mainNav').classList.toggle('active');
}

function toggleDropdown(btn) {
    if (window.innerWidth <= 968) {
        btn.parentElement.classList.toggle('open');
    }
}

function randomFilm() {
    window.location.href = '<?php echo home_url(); ?>/?random=1';
}

function performSearch() {
    var searchInput = document.getElementById('searchInput');
    if (searchInput.value) {
        window.location.href = '/?s=' + encodeURIComponent(searchInput.value);
    }
}

document.getElementById('searchInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter' && this.value) {
        window.location.href = '/?s=' + encodeURIComponent(this.value);
    }
});
</script>