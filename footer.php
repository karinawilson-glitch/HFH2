</div><!-- #content -->
</div><!-- #page -->

<footer role="contentinfo">
    <style>
    footer {
        background: #000;
        border-top: 1px solid rgba(139, 0, 0, 0.2);
        padding: 3rem 2rem;
        text-align: center;
        margin-top: 4rem;
    }

    .footer-nav {
        margin-bottom: 2rem;
    }

    .footer-menu {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        list-style: none;
        padding: 0;
        margin: 0 auto 2rem auto;
        gap: 1.5rem;
        max-width: 600px;
    }

    .footer-menu li {
        margin: 0;
    }

    .footer-menu a {
        color: #888;
        text-decoration: none;
        font-size: 0.95rem;
        transition: color 0.3s;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        display: block;
    }

    .footer-menu a:hover {
        color: #fff;
        background: rgba(139, 0, 0, 0.15);
    }

    .footer-menu a:focus {
        outline: 2px solid rgba(139, 0, 0, 0.6);
        outline-offset: 2px;
    }

    .footer-buttons {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 1.5rem;
        margin: 2rem auto;
        max-width: 480px;
    }

    .footer-btn {
        width: 100%;
        max-width: 480px;
        padding: 1rem 2rem;
        background: #ffa500;
        border: 2px solid #ff8c00;
        color: #000;
        text-decoration: none;
        font-size: 1rem;
        font-weight: 600;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        border-radius: 4px;
        box-shadow: 0 4px 12px rgba(255, 165, 0, 0.3);
    }

    .footer-btn:hover {
        background: #ff8c00;
        border-color: #ff7800;
        color: #000;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(255, 165, 0, 0.4);
    }

    .footer-btn:focus {
        outline: 2px solid rgba(139, 0, 0, 0.6);
        outline-offset: 2px;
    }

    .substack-embed {
        width: 100%;
        max-width: 480px;
        height: 320px;
        border: 1px solid #EEE;
        background: white;
        border-radius: 4px;
        margin: 0 auto;
        display: block;
    }

    .footer-copyright {
        color: #888;
        font-size: 0.95rem;
        margin: 2rem auto 1rem auto;
        max-width: 800px;
        text-align: center;
    }

    .footer-disclaimer {
        color: #666;
        font-size: 0.85rem;
        font-style: italic;
        margin: 1rem auto 0 auto;
        max-width: 800px;
        text-align: center;
    }

    @media (max-width: 768px) {
        .footer-menu {
            flex-direction: column;
            gap: 0.5rem;
        }

        .footer-buttons {
            gap: 1rem;
        }

        .substack-embed {
            height: 280px;
        }

        .footer-btn {
            max-width: 100%;
        }
    }
    </style>

    <nav aria-label="Footer navigation" class="footer-nav">
        <ul class="footer-menu">
            <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
            <li><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a></li>
            <li><a href="<?php echo esc_url(home_url('/disclaimer/')); ?>">Disclaimer</a></li>
        </ul>
    </nav>

    <div class="footer-buttons">
        <a href="https://www.paypal.com/donate/?hosted_button_id=MKVR45QELHHA2" 
           target="_blank" 
           rel="noopener noreferrer" 
           class="footer-btn"
           aria-label="Support this site via PayPal (opens in new window)">
            <span>☕</span> Support This Site
        </a>

        <iframe src="https://karinawilson.substack.com/embed" 
                class="substack-embed"
                width="480" 
                height="320" 
                style="border:1px solid #EEE; background:white;" 
                frameborder="0" 
                scrolling="no"
                title="Subscribe to Karina Wilson on Substack"></iframe>
    </div>

    <p class="footer-copyright">
        © Karina Wilson, 2005-<?php echo esc_html(date('Y')); ?>. Exploring our shared nightmares since the dawn of cinema.
    </p>

    <p class="footer-disclaimer">
        Movie images are used for educational purposes and remain the copyright of their respective owners.
    </p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
