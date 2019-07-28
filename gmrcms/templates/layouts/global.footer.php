<?php
    $page = perch_layout_var('page', true);
?>

<footer id="footer">

    <div id="siteinfo">
        <div class="container">
            <div id="footerLinks" style="float: left">
                <ul class="list-inline list-logos">
                    <?php perch_content('sponsorLogo'); ?>
                </ul>
                <ul class="list-inline list-links">
                    <li><a href="/newelements/about.php#contact">Contact</a></li>
                    <li><a href="/newelements/about.php#governance">Governance</a></li>
                    <li><a href="/newElements/privacy.php">Cookie & Privacy Policy</a></li>
                </ul>
            </div>
            <div id="social">
                <ul class="list-inline list-logos">
                    <?php perch_content('socialMedia'); ?>
                </ul>
            </div>
        </div>
    </div>
    <div id="copyright">
        <div class="container">
            <p>&copy;
                <?php echo date('Y'); ?> -
                <?php perch_content('address'); ?>
            </p>
        </div>
    </div>
</footer>

<script type="text/javascript" src="/newElements/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="/newElements/js/jquery.ihavecookies.js"></script>
<script type="text/javascript" src="/newElements/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="/newElements/js//bootstrap.min.js"></script>
<script type="text/javascript" src="/newElements/js/general.js"></script>
<script type="text/javascript" src="/newElements/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="/newElements/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="/newElements/js/froogaloop.js"></script>
<script type="text/javascript" src="/newElements/js/glightbox.min.js"></script>

<script type="text/javascript">
    // Script for the Cookie plugin iHaveCookies
    var options = {
        title: '&#9835; Accept Cookies & Privacy Policy?',
        message: 'Just essential Cookies will be saved and used to optimise your experience. Click the <strong>accept</strong> button below accept the cookies.',
        delay: 600,
        expires: 30,
        link: 'http://localhost/newElements/privacy.php',
        uncheckBoxes: true,
        acceptBtnLabel: 'Accept Cookies',
        moreInfoLabel: 'More information.',
        cookieTypesTitle: 'Select which cookies you want to accept',
        fixedCookieTypeLabel: 'Essential',
        fixedCookieTypeDesc: 'These are essential for the website to work correctly.'
    }

    $(document).ready(function() {
        $('body').ihavecookies(options);

        $('#ihavecookiesBtn').on('click', function() {
            $('body').ihavecookies(options, 'reinit');
        });
    });

    // Script for adjusting the colour of the header if scrolling
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 0) {
                $(".mainheader").css({
                    "background": "rgba(var(--Color2Header), 1)"
                })
                $(".mainSubHeader").css({
                    "background": "rgba(var(--Color6RGB), 1)"
                })
            } else {
                $(".mainheader").css({
                    "background": "rgba(var(--Color2Header), 1)"
                })
                $(".mainSubHeader").css({
                    "background": "rgba(var(--Color6RGB), 0.85)"
                })
            }
        })

        var title = document.getElementsByTagName("title")[0].innerHTML;


        if (title == 'Education | Galway Music Residency') {
            $(document).ready(function() {
                var header = $('.mainheader').height();
                var sub = $('#sub').height();

                $(window).scroll(function() {
                    var h1 = $('#symphonicWaves').offset().top - header - sub;
                    var h2 = $('#schoolProgramme').offset().top - header - sub;
                    var h3 = $('#communityProgram').offset().top - header - sub;
                    var h4 = $('#nuigPartner').offset().top - header - sub;
                    var scroll = $(window).scrollTop();
                    if (scroll < h1) {
                        $('#sub1').addClass('currentPage');
                        $('#sub5').removeClass('currentPage');
                        $('#sub2').removeClass('currentPage');
                        $('#sub3').removeClass('currentPage');
                        $('#sub4').removeClass('currentPage');
                    } else if (scroll < h2) {
                        $('#sub1').removeClass('currentPage');
                        $('#sub5').removeClass('currentPage');
                        $('#sub3').removeClass('currentPage');
                        $('#sub4').removeClass('currentPage');
                        $('#sub2').addClass('currentPage');
                    } else if (scroll < h3) {
                        $('#sub1').removeClass('currentPage');
                        $('#sub2').removeClass('currentPage');
                        $('#sub5').removeClass('currentPage');
                        $('#sub4').removeClass('currentPage');
                        $('#sub3').addClass('currentPage');
                    } else if (scroll < h4) {
                        $('#sub1').removeClass('currentPage');
                        $('#sub2').removeClass('currentPage');
                        $('#sub3').removeClass('currentPage');
                        $('#sub5').removeClass('currentPage');
                        $('#sub4').addClass('currentPage');
                    } else {
                        $('#sub1').removeClass('currentPage');
                        $('#sub2').removeClass('currentPage');
                        $('#sub3').removeClass('currentPage');
                        $('#sub4').removeClass('currentPage');
                        $('#sub5').addClass('currentPage');
                    }
                });
            })

            $(document).ready(function() {

                var header = $('.mainheader').height();
                var sub = $('#sub').height();

                $("#subEdu1").click(function() {
                    $('html,body').animate({
                            scrollTop: $('#apprenticeProgramme').offset().top - header - sub + 1
                        },
                        'slow');
                });

                $("#subEdu2").click(function() {
                    $('html,body').animate({
                            scrollTop: $('#symphonicWaves').offset().top - header - sub + 1
                        },
                        'slow');
                });

                $("#subEdu3").click(function() {
                    $('html,body').animate({
                            scrollTop: $('#schoolProgramme').offset().top - header - sub + 1
                        },
                        'slow');
                });

                $("#subEdu4").click(function() {
                    $('html,body').animate({
                            scrollTop: $('#communityProgram').offset().top - header - sub + 1
                        },
                        'slow');
                });

                $("#subEdu5").click(function() {
                    $('html,body').animate({
                            scrollTop: $('#nuigPartner').offset().top - header - sub + 1
                        },
                        'slow');
                });
            })

            $(function() {
                $(".previousApprenticeCard").slice(0, 3).show().css('display', 'grid');
                $("#seeMoreButton").on('click', function(e) {
                    e.preventDefault();
                    $(".previousApprenticeCard:hidden").slice(0, 50).show().css('display', 'grid');
                    document.getElementById("seeMoreButton").style.display = "none";
                });
            });
        }

        if (title == 'Support | Galway Music Residency') {
            $(document).ready(function() {
                var header = $('.mainheader').height();
                var sub = $('#sub').height();
                var h1 = $('#SponsorsAndFriends').offset().top - header - sub;
                var h2 = $('#shop').offset().top - header - sub;
                var h3 = $('#volunteers').offset().top - header - sub;
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();

                    if (scroll < h1) {
                        $('#subSu1').addClass('currentPage');
                        $('#subSu2').removeClass('currentPage');
                        $('#subSu3').removeClass('currentPage');
                        $('#subSu4').removeClass('currentPage');
                    } else if (scroll < h2) {
                        $('#subSu1').removeClass('currentPage');
                        $('#subSu2').addClass('currentPage');
                        $('#subSu3').removeClass('currentPage');
                        $('#subSu4').removeClass('currentPage');
                    } else if (scroll < h3) {
                        $('#subSu1').removeClass('currentPage');
                        $('#subSu2').removeClass('currentPage');
                        $('#subSu3').addClass('currentPage');
                        $('#subSu4').removeClass('currentPage');
                    } else {
                        $('#subSu1').removeClass('currentPage');
                        $('#subSu2').removeClass('currentPage');
                        $('#subSu3').removeClass('currentPage');
                        $('#subSu4').addClass('currentPage');
                    }
                });
            })

            $(document).ready(function() {
                var header = $('.mainheader').height();
                var sub = $('#sub').height();

                $("#subSub1").click(function() {
                    $('html,body').animate({
                            scrollTop: $('#becomeFriend').offset().top - header - sub + 1
                        },
                        'slow');
                });

                $("#subSub2").click(function() {
                    $('html,body').animate({
                            scrollTop: $('#SponsorsAndFriends').offset().top - header - sub + 1
                        },
                        'slow');
                });

                $("#subSub3").click(function() {
                    $('html,body').animate({
                            scrollTop: $('#shop').offset().top - header - sub + 1
                        },
                        'slow');
                });

                $("#subSub4").click(function() {
                    $('html,body').animate({
                            scrollTop: $('#volunteers').offset().top - header - sub + 1
                        },
                        'slow');
                });

            })
        }


        if (title == 'About | Galway Music Residency') {
            $(document).ready(function() {
                var header = $('.mainheader').height();
                var sub = $('#sub').height();
                var h1 = $('#governance').offset().top - header - sub;
                var h2 = $('#contact').offset().top - header - sub;
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();

                    if (scroll < h1) {
                        $('#subEd1').addClass('currentPage');
                        $('#subEd2').removeClass('currentPage');
                        $('#subEd3').removeClass('currentPage');
                    } else if (scroll < h2) {
                        $('#subEd1').removeClass('currentPage');
                        $('#subEd2').addClass('currentPage');
                        $('#subEd3').removeClass('currentPage');
                    } else {
                        $('#subEd1').removeClass('currentPage');
                        $('#subEd2').removeClass('currentPage');
                        $('#subEd3').addClass('currentPage');
                    }
                });
            })

            $(document).ready(function() {
                var header = $('.mainheader').height();
                var sub = $('#sub').height();

                $("#subEdu1").click(function() {
                    $('html,body').animate({
                            scrollTop: $('#aboutUs').offset().top - header - sub + 1
                        },
                        'slow');
                });

                $("#subEdu2").click(function() {
                    $('html,body').animate({
                            scrollTop: $('#governance').offset().top - header - sub + 1
                        },
                        'slow');
                });

                $("#subEdu3").click(function() {
                    $('html,body').animate({
                            scrollTop: $('#contact').offset().top - header - sub + 1
                        },
                        'slow');
                });

            })
        }


        if (title == 'Album | Galway Music Residency') {
            $(document).ready(function() {
                var myLightbox = GLightbox({
                    'selector': 'glightbox'
                });

                var count = 2;
                $(window).scroll(function() {
                    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                    if (($(window).scrollTop() > height - 200) && count < 1000) {
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("picturesGalleryID").innerHTML += this.responseText;
                                if (!this.responseText || (jQuery.trim(this.responseText)).length == 0) count = 1000;
                            }
                        };

                        xhttp.open("POST", "http://localhost/newelements/albumMore.php?album=" + document.getElementById("idAlbum").innerHTML + "&page=" + count, true);
                        xhttp.send();
                        count++;
                    }
                var myLightbox = GLightbox({
                    'selector': 'glightbox'
                });
                });
            })
        }

        if (title == 'News | Galway Music Residency') {
            $(document).ready(function() {
                var count = 2;
                $(window).scroll(function() {
                    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                    if (($(window).scrollTop() > height - 200) && count < 1000) {
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("newsContainer").innerHTML += this.responseText;
                                if (!this.responseText || (jQuery.trim(this.responseText)).length == 0) count = 1000;
                            }
                        };

                        xhttp.open("POST", "http://localhost/newelements/newsMore.php?dateNewsFrom=" + document.getElementById("form1_dateNewsFrom").value + "&dateNewsTo=" + document.getElementById("form1_dateNewsTo").value + "&nameNews=" + document.getElementById("form1_nameNews").value + "&page=" + count, true);
                        xhttp.send();
                        count++;
                    }
                });
            })
        }

        if (title == 'Events | Galway Music Residency') {
            $(document).ready(function() {
                var count = 2;
                var currentURL = window.location.search;
                var lastIdent = currentURL.slice(-5);

                $(window).scroll(function() {
                    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                    if (($(window).scrollTop() > height - 200) && count < 1000) {
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("eventContainer").innerHTML += this.responseText;
                                if (!this.responseText || (jQuery.trim(this.responseText)).length == 0) count = 1000;
                            }
                        };
                        xhttp.open("POST", "http://localhost/newelements/eventsMore.php?dateEvent=" + document.getElementById("form1_dateEvent").value + "&nameEvent=" + document.getElementById("form1_nameEvent").value + "&page=" + count + "&" + lastIdent, true);
                        xhttp.send();
                        count++;
                    }
                });
            })
        }

        // Scroll indicator. Code taken from https://stackoverflow.com/questions/53295911/scroll-indicator-javascript
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            document.getElementById("myBar").style.width = scrolled + "%";
        }
    })

    $(window).load(function() {
        try {

            var player = document.getElementById('player_1');
              $f(player).addEvent('ready', ready);

              function addEvent(element, eventName, callback) {
                if (element.addEventListener) {
                  element.addEventListener(eventName, callback, false)
                } else {
                  element.attachEvent(eventName, callback, false);
                }
              }

              function ready(player_id) {
                var froogaloop = $f(player_id);
                froogaloop.addEvent('play', function(data) {
                  $('.flexslider').flexslider("pause");
                });
                froogaloop.addEvent('pause', function(data) {
                  $('.flexslider').flexslider("play");
                });
              }

            $(".flexslider")
                .fitVids()
                .flexslider({
                    animation: "slide",
                    useCSS: false,
                    touch: true,
                    animationLoop: true,
                    slideshowSpeed: 4000,
                    smoothHeight: true,
                    start: function(slider) {
                        $('body').removeClass('loading');
                    },
                    before: function(slider) {
                        $f(player).api('pause');
                    }
                });
        } catch {
            $('.flexslider').flexslider({
                animation: "slide",
                useCSS: false,
                touch: true,
                animationLoop: true,
                slideshowSpeed: 4000,
                smoothHeight: true,
            });
        }
    });

    function stopVideos() {
        $('.video-Embed').each(function() {
            this.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*')
      });
    }

    function openNav(id) {
        document.getElementById(id).style.height = "100%";
    }

    function closeNav(id) {
        document.getElementById(id).style.height = "0%";
    }

    function changeBurgerMenu(x) {
        x.classList.toggle("change");
        if (document.getElementById("MainHeaderBar").style.height != "100%") {
            document.getElementById("MainHeaderBar").style.height = "100%";
        } else {
            document.getElementById("MainHeaderBar").style.height = null;
        }
    }

</script>

</body>

</html>
