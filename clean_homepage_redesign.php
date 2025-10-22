<?php
/**
 * Template Name: Horror Homepage - Clean Redesign
 * Description: Professional, museum-quality homepage template
 */

get_header();
?>

<section class="hero">
    <div class="hero-content">
        <div class="hero-image">
            <img src="https://horrorfilmhistory.com/wp/wp-content/uploads/2019/12/TheNightmarebyJohn_Henry_Fuseli.jpg" 
                 alt="The Nightmare by John Henry Fuseli">
        </div>
        <div class="hero-text">
            <h1>Our Shared Nightmares</h1>
            <p class="tagline">"If movies are the dreams of the mass culture… horror movies are the nightmares"</p>
            <p>Horror films reflect and provoke pop culture discourse, offering us a fictional space to share and evaluate our collective fears. From silent screams to modern terrors, explore over a century of cinematic darkness.</p>
            <div class="cta-buttons">
                <a href="#timeline" class="cta-btn primary">Explore Timeline</a>
                <a href="<?php echo home_url('/horror-roots-of-the-genre/'); ?>" class="cta-btn">Read Analysis</a>
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <h2>Understanding Horror Film History: Context Is Everything</h2>
    <p>Horror cinema offers us a fictional space to share and evaluate our collective fears — whatever they may be at the time. These scary movies allow us to stare down whichever one of the Four Horsemen of the Apocalypse — Pestilence, War, Famine, Death — is currently leading the charge. They also let us examine the darkest possibilities emerging from science and technology. Despite decades of religious and government censorship, horror films serve a wider moral purpose: reinforcing social taboos and demonstrating the macabre fate awaiting those who transgress against our collective rules.</p>

    <h3>Horror Audiences: Forever Seeking Fresh Scares</h3>
    <p>The youthful 15-24 demographic has shaped horror cinema since the 1950s, and audiences continually evolve alongside the genre. We perpetually seek out new thrills and fresh scares. New horror movies must remain relevant or risk losing their bite: what terrified audiences yesterday might seem a non-issue tomorrow.</p>
    
    <p>Generation by generation, we work through our shared traumas through horror storytelling. In the 1970s, people feared mutations in unborn babies triggered by thalidomide or Agent Orange. Today, that threat is forgotten — we're far more concerned about microplastics and climate catastrophe. Horror cinema absorbs these anxieties and transforms them into entertainment.</p>

    <h3>The Horror Genre: A Cultural Constant</h3>
    <p>Despite frequent hand-wringing about its demise, the horror genre remains a cultural constant. We've terrified each other with tales that trigger the less logical parts of our imaginations for as long as we've told stories. From the ballads of the ancient world to modern urban myths, audiences flock to sadistic storytellers to be scared witless — and remain happy to pay for the privilege.</p>
    
    <p>Over the past century, horror movies have consistently succeeded at the box office. As the horrors of climate change, overpopulation, income inequality, and countless other threats loom on the horizon, they won't be fading away any time soon.</p>

    <h3>How to Use This Site</h3>
    <p>The best way to study and appreciate the history of horror films is, of course, to watch them. However, it's also crucial to understand each film's wider socio-historical background and its place within the genre.</p>
    
    <ul>
        <li>Where did directors and writers get their inspiration?</li>
        <li>What cultural anxieties shaped each era's monsters?</li>
        <li>How do horror subgenres interconnect across decades?</li>
    </ul>
    
    <p>Navigate through our decade-by-decade guides, explore film analysis by category, discover thematic connections, or use the search function to find specific films, directors, and horror movements.</p>
</section>

<section id="timeline" class="timeline-section">
    <h2>Journey Through Horror History</h2>
    <p class="timeline-subtitle">Drag or use arrows to explore over a century of terror</p>
    
    <div class="timeline-view-toggle">
        <button class="view-toggle-btn active" onclick="switchTimelineView('horizontal')" id="horizontalBtn">Horizontal View</button>
        <button class="view-toggle-btn" onclick="switchTimelineView('vertical')" id="verticalBtn">Vertical View</button>
    </div>
    
    <!-- Horizontal Timeline -->
    <div class="timeline-horizontal" id="timelineHorizontal">
        <div class="timeline-container" id="timelineContainer">
            <div class="timeline-track">
                <div class="timeline-line"></div>
                
                <div class="timeline-items">
                <!-- Origin -->
                <a href="<?php echo home_url('/silent-horror-movies/'); ?>" class="timeline-item">
                    <div class="timeline-content">
                        <img src="https://horrorfilmhistory.com/wp/wp-content/uploads/2025/10/1900s.webp" alt="Early Horror Cinema" class="timeline-icon">
                        <div class="timeline-year">Origin</div>
                        <div class="timeline-era">Birth of Horror</div>
                        <div class="timeline-description">Silent screams and German Expressionism</div>
                    </div>
                    <div class="timeline-dot"></div>
                </a>

                <!-- 1920s -->
                <a href="<?php echo home_url('/1920s-horror/'); ?>" class="timeline-item">
                    <div class="timeline-content">
                        <img src="https://horrorfilmhistory.com/wp/wp-content/uploads/2025/10/1920s.webp" alt="Silent Era Horror" class="timeline-icon">
                        <div class="timeline-year">1920s</div>
                        <div class="timeline-era">Shadows & Silhouettes</div>
                        <div class="timeline-description">Nosferatu and the art of visual dread</div>
                    </div>
                    <div class="timeline-dot"></div>
                </a>

                <!-- 1930s -->
                <a href="<?php echo home_url('/1930s-horror/'); ?>" class="timeline-item">
                    <div class="timeline-content">
                        <img src="https://horrorfilmhistory.com/wp/wp-content/uploads/2025/10/1930s.webp" alt="Universal Monsters Era" class="timeline-icon">
                        <div class="timeline-year">1930s</div>
                        <div class="timeline-era">Universal Monsters</div>
                        <div class="timeline-description">Dracula, Frankenstein, and iconic creatures</div>
                    </div>
                    <div class="timeline-dot"></div>
                </a>

                <!-- 1940s -->
                <a href="<?php echo home_url('/1940s-horror/'); ?>" class="timeline-item">
                    <div class="timeline-content">
                        <img src="https://horrorfilmhistory.com/wp/wp-content/uploads/2025/10/1940s.webp" alt="Psychological Horror" class="timeline-icon">
                        <div class="timeline-year">1940s</div>
                        <div class="timeline-era">Psychological Terror</div>
                        <div class="timeline-description">War-era anxieties and mind games</div>
                    </div>
                    <div class="timeline-dot"></div>
                </a>

                <!-- 1950s -->
                <a href="<?php echo home_url('/1950s-horror/'); ?>" class="timeline-item">
                    <div class="timeline-content">
                        <img src="https://horrorfilmhistory.com/wp/wp-content/uploads/2025/10/1950s.webp" alt="Atomic Age Monsters" class="timeline-icon">
                        <div class="timeline-year">1950s</div>
                        <div class="timeline-era">Atomic Age</div>
                        <div class="timeline-description">Giant monsters and Cold War paranoia</div>
                    </div>
                    <div class="timeline-dot"></div>
                </a>

                <!-- 1960s -->
                <a href="<?php echo home_url('/1960s-horror/'); ?>" class="timeline-item">
                    <div class="timeline-content">
                        <img src="https://horrorfilmhistory.com/wp/wp-content/uploads/2025/10/1960s.webp" alt="Psycho Era" class="timeline-icon">
                        <div class="timeline-year">1960s</div>
                        <div class="timeline-era">Psycho Killers</div>
                        <div class="timeline-description">Hitchcock and the human monster</div>
                    </div>
                    <div class="timeline-dot"></div>
                </a>

                <!-- 1970s -->
                <a href="<?php echo home_url('/1970s-horror/'); ?>" class="timeline-item">
                    <div class="timeline-content">
                        <img src="https://horrorfilmhistory.com/wp/wp-content/uploads/2025/10/1970s.webp" alt="Domestic Terror" class="timeline-icon">
                        <div class="timeline-year">1970s</div>
                        <div class="timeline-era">Horror Comes Home</div>
                        <div class="timeline-description">Fear your family and domestic terror</div>
                    </div>
                    <div class="timeline-dot"></div>
                </a>

                <!-- 1980s -->
                <a href="<?php echo home_url('/1980s-horror-movies/'); ?>" class="timeline-item">
                    <div class="timeline-content">
                        <img src="https://horrorfilmhistory.com/wp/wp-content/uploads/2025/10/1980s.webp" alt="Special Effects Era" class="timeline-icon">
                        <div class="timeline-year">1980s</div>
                        <div class="timeline-era">Carnival of Excess</div>
                        <div class="timeline-description">Slashers, gore, and special effects mastery</div>
                    </div>
                    <div class="timeline-dot"></div>
                </a>

                <!-- 1990s -->
                <a href="<?php echo home_url('/1990s-horror-movies/'); ?>" class="timeline-item">
                    <div class="timeline-content">
                        <img src="https://horrorfilmhistory.com/wp/wp-content/uploads/2025/10/1990s.webp" alt="Meta-Horror Era" class="timeline-icon">
                        <div class="timeline-year">1990s</div>
                        <div class="timeline-era">Meta-Horror</div>
                        <div class="timeline-description">Self-aware scares and Y2K dread</div>
                    </div>
                    <div class="timeline-dot"></div>
                </a>

                <!-- 2000s -->
                <a href="<?php echo home_url('/2000s-horror-movies/'); ?>" class="timeline-item">
                    <div class="timeline-content">
                        <img src="https://horrorfilmhistory.com/wp/wp-content/uploads/2025/10/2000s.webp" alt="J-Horror Era" class="timeline-icon">
                        <div class="timeline-year">2000s</div>
                        <div class="timeline-era">Global Terror</div>
                        <div class="timeline-description">J-horror, torture porn, found footage</div>
                    </div>
                    <div class="timeline-dot"></div>
                </a>

                <!-- 2010s -->
                <a href="<?php echo home_url('/2010s-horror/'); ?>" class="timeline-item">
                    <div class="timeline-content">
                        <img src="https://horrorfilmhistory.com/wp/wp-content/uploads/2025/10/2020s.webp" alt="Modern Horror Era" class="timeline-icon">
                        <div class="timeline-year">2010s</div>
                        <div class="timeline-era">Elevated Horror</div>
                        <div class="timeline-description">Prestige horror and social commentary</div>
                    </div>
                    <div class="timeline-dot"></div>
                </a>
            </div>
        </div>
    </div>
    
    <div class="nav-arrows">
        <button class="nav-arrow" id="scrollLeft">←</button>
        <button class="nav-arrow" id="scrollRight">→</button>
    </div>
    
    <div class="scroll-hint">Click arrows, drag, or use scrollbar to explore the timeline</div>
</section>

<section class="features-section">
    <div class="feature-card">
        <h3>Contextual Analysis</h3>
        <p>Explore how historical events, social anxieties, and technological advances shaped the monsters we feared across different eras.</p>
    </div>

    <div class="feature-card">
        <h3>Genre Evolution</h3>
        <p>Trace the bloodline of horror from Gothic literature to streaming services. See how filmmakers innovated across generations.</p>
    </div>

    <div class="feature-card">
        <h3>Deep Dives</h3>
        <p>In-depth examinations of influential films, directors, and subgenres. Understand the craft behind the scares.</p>
    </div>
</section>

<script>
// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// Timeline view switcher
function switchTimelineView(view) {
    const horizontal = document.getElementById('timelineHorizontal');
    const vertical = document.getElementById('timelineVertical');
    const hBtn = document.getElementById('horizontalBtn');
    const vBtn = document.getElementById('verticalBtn');
    
    if (view === 'horizontal') {
        horizontal.style.display = 'block';
        vertical.style.display = 'none';
        hBtn.classList.add('active');
        vBtn.classList.remove('active');
        localStorage.setItem('timelineView', 'horizontal');
    } else {
        horizontal.style.display = 'none';
        vertical.style.display = 'block';
        hBtn.classList.remove('active');
        vBtn.classList.add('active');
        localStorage.setItem('timelineView', 'vertical');
    }
}

// Load saved preference
window.addEventListener('DOMContentLoaded', function() {
    const savedView = localStorage.getItem('timelineView');
    if (savedView === 'vertical') {
        switchTimelineView('vertical');
    }
});

// Timeline scroll functionality
const container = document.getElementById('timelineContainer');
const scrollLeftBtn = document.getElementById('scrollLeft');
const scrollRightBtn = document.getElementById('scrollRight');

if (container && scrollLeftBtn && scrollRightBtn) {
    // Arrow button scrolling
    scrollLeftBtn.addEventListener('click', () => {
        container.scrollBy({ left: -400, behavior: 'smooth' });
    });
    
    scrollRightBtn.addEventListener('click', () => {
        container.scrollBy({ left: 400, behavior: 'smooth' });
    });
    
    // Drag to scroll functionality
    let isDown = false;
    let startX;
    let scrollLeft;
    
    container.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - container.offsetLeft;
        scrollLeft = container.scrollLeft;
    });
    
    container.addEventListener('mouseleave', () => {
        isDown = false;
    });
    
    container.addEventListener('mouseup', () => {
        isDown = false;
    });
    
    container.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - container.offsetLeft;
        const walk = (x - startX) * 2;
        container.scrollLeft = scrollLeft - walk;
    });
}
</script>

<?php
get_footer();
?>
