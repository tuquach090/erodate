<?php include "./layout/header.php" ?>
<div class="wrap wrap-fix wob_profile_settings">
    <div class="content-spacer ">&nbsp;</div>
    <?php include "./layout/menu.php" ?>
    <div class="content">
        <div id="eventQueue"><noscript>
                    <div class="alert alert-danger">Aby korzystać z serwisu, konieczne jest włączenie obsługi JavaScript
                    </div>
                </noscript></div>
        <div class="module-box module-box--fill">
            <h1 class="main-title">Ustawienia</h1>
            <div class="settings edit">
                <div data-role="tabs">
                    <div class="c-t">
                        <ul>
                            <li class="account active"><a href="#"><span class="c-t-t">Konto</span><span
                                            class="lbl hide">(<span data-role="label"></span>)</span></a></li>
                            <li class="notifications"><a href="#notifications"><span class="c-t-t">Powiadomienia na
                                            e-mail lub telefon</span><span class="lbl hide">(<span
                                                data-role="label"></span>)</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-contents">
                    <div class="settings-tab-content" data-role="tab-content-account"></div>
                    <div class="settings-tab-content hide" data-role="tab-content-notifications">
                        <div data-role="siteFields"></div>
                        <div data-role="phoneFields"></div>
                        <div data-role="emailFields"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './layout/footer.php'?>
