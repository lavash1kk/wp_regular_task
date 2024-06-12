<?php
/*
Template Name: Homepage
*/
get_header();?>
    <div class="main-content">
        <div class="left-content">
            <div class="text-content">
                <h1>John Doe</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dolor magna risus sed. Et dictumst vel.</p>
            </div>
            <button>Free Seo Consulting Training</button>
        </div>
        <div class="right-content">
            <div class="imgage-content">
                <img src="<?php echo get_template_directory_uri();?>/images/man_img.png" alt="John Doe">
            </div>
        </div>
    </div>
    <div class="body-content">
        <div class="banner-content">
            <div class="banner-left-content">
                <h2>Superstar SEO</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam amet, platea diam rhoncus, sem tortor,
                    turpis ac tincidunt. Nisi adipiscing a suspendisse justo eleifend volutpat et vitae ac. Consequat in mi
                    iaculis hendrerit mauris mattis. Lacus risus amet at magna urna. Felis nec orci a, quis nullam vel sem
                    nunc enim. Sit mi tellus eget commodo augue.</p>
            </div>
            <div class="banner-right-content">
                <img src="<?php echo get_template_directory_uri();?>/images/img_devices.png" alt="Devices">
            </div>
        </div>
    </div>

    <div class="comments-block">
        <div class="slider-block">
            <div class="top-content">
                <div class="slider-title">
                    <h2>What My <span>Clients Say</span></h2>
                </div>

                <div class="navigation-arrows">
                    <button class="bg left">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_343)">
                                <path d="M19.7709 9.94711C19.7706 9.94687 19.7704 9.9466 19.7702 9.94636L15.688 5.88387C15.3821 5.57953 14.8875 5.58067 14.5831 5.88653C14.2787 6.19235 14.2799 6.68699 14.5857 6.99137L17.3265 9.71886H0.78125C0.349766 9.71886 0 10.0686 0 10.5001C0 10.9316 0.349766 11.2814 0.78125 11.2814H17.3264L14.5857 14.0089C14.2799 14.3132 14.2788 14.8079 14.5831 15.1137C14.8875 15.4196 15.3822 15.4207 15.688 15.1164L19.7702 11.0539C19.7704 11.0536 19.7706 11.0534 19.7709 11.0531C20.0769 10.7477 20.0759 10.2515 19.7709 9.94711Z"
                                      fill="black"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1_343">
                                    <rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>

                    <button class="bg">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_343)">
                                <path d="M19.7709 9.94711C19.7706 9.94687 19.7704 9.9466 19.7702 9.94636L15.688 5.88387C15.3821 5.57953 14.8875 5.58067 14.5831 5.88653C14.2787 6.19235 14.2799 6.68699 14.5857 6.99137L17.3265 9.71886H0.78125C0.349766 9.71886 0 10.0686 0 10.5001C0 10.9316 0.349766 11.2814 0.78125 11.2814H17.3264L14.5857 14.0089C14.2799 14.3132 14.2788 14.8079 14.5831 15.1137C14.8875 15.4196 15.3822 15.4207 15.688 15.1164L19.7702 11.0539C19.7704 11.0536 19.7706 11.0534 19.7709 11.0531C20.0769 10.7477 20.0759 10.2515 19.7709 9.94711Z"
                                      fill="black"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1_343">
                                    <rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="middle-content">
                <div class="image-middle-content">
                    <img src="<?php echo get_template_directory_uri();?>/images/img_for_comments.png" alt="Comments">
                </div>

                <div class="text-middle-content">
                    <p class="comment text_italic_large">“Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Adipiscing diam, tortor,
                        egestas euismod neque venenatis, viverra. Ante nibh morbi egestas quam lorem ipsum. Eget sit
                        praesent a
                        laoreet. Mi, phasellus quis mauris sollicitudin non. Iaculis ac duis mauris enim. “</p>
                    <p class="name-commentator">Frank Hardy</p>
                    <p class="job-title">Your Marketing Crew CEO</p>
                </div>
            </div>

            <div class="bottom-content">
                <div class="slider-dots">
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
                    <span class="dot" data-slide="3"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-section">
        <div class="contact-section-block">
            <div class="contact-info">
                <h2>Get in Touch</h2>
                <div class="space"></div>
                <p class="contact-email"><a href="mailto:hello@domainexample.com">hello@domainexample.com</a></p>
                <p class="contact-address">237 Haylee Islands Suite 960</p>
            </div>

            <div class="contact-form">

                <form action="#" method="post">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <textarea name="message" placeholder="Write something..." required></textarea>
                    <button type="submit" class="submit-button">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.818176 1.85267L8.39603 8.58854C8.74047 8.89472 9.25952 8.89472 9.60396 8.58854L17.1818 1.85267V12.4545C17.1818 12.9566 16.7748 13.3636 16.2727 13.3636H1.72727C1.22519 13.3636 0.818176 12.9566 0.818176 12.4545V1.85267ZM2.1865 0.636353H15.8134L8.99995 6.69276L2.1865 0.636353Z"
                                  fill="white"/>
                        </svg>
                        Submit Message
                    </button>
                </form>
            </div>
        </div>
    </div>
<?php get_footer();?>