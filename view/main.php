
<!DOCTYPE html>
<html lang="tr" data-theme="light">
<head>




    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


        <meta name="viewport" content="width=1360, initial-scale=0.5, maximum-scale=0.5, user-scalable=no, minimal-ui" />

        <meta name="revisit-after" content="1 Days" />
        <meta name="Robots" content="all" />

        <meta name="language" content="T&#252;rk&#231;e" />

        <meta name="google" content="notranslate" />

<script>
    window._peq = window._peq || []; window._peq.push(["init"]);
</script>
<script src="https://clientcdn.pushengage.com/core/ba6c5927-2efd-4544-9fd7-e813d783a594.js" async></script>                        <title>Betwoon</title>




    


            <link rel="shortcut icon" href="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/favicon.ico" type="image/x-icon" />
            <link rel="icon" href="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/favicon.ico" type="image/x-icon" />
            <meta property="og:image" content="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/favicon.ico">

<script src="assets/bundles/jquery.html?v=rHHkxczKuDEhHZJJ-LXudRCNPo6nnp0sLpO1KZaZcvQ1"></script>

<script src="assets/bundles/custom-select.html?v=PFni43TbH5zj0P_hqMoYHMnPTM8bEHd03tS263FB2eo1"></script>

<script src="assets/bundles/modernizr.html?v=inCVuEFe6J4Q07A0AcRsbJic_UE5MwpRMNGcOtk94TE1"></script>

<script src="assets/bundles/bootstrap.html?v=KV7CuCBmF6LFAEPxzUCwAdYJNXXW5Nzrz9grx3-jXXk1"></script>

<script src="assets/bundles/Common.html?v=ros3aRhXwUq-XvXlVKWJwxgfQH7LWxE4f9kBQMDXMLQ1"></script>


<link href="assets/Content/themes/base/css?v=tBx2ThaAMYALV4GsDBbake9CX_fvrFUk8_JMfj5YrS41" rel="stylesheet"/>



<link href="assets/Content/css.css?v=92Oq5x906YWalNOE5u3HDZ4BqPvqME6T_oeu8Azt2Ok1" rel="stylesheet"/>


<link href="assets/bundles/dynamicLobbyWeb.css?v=_A9PsxHHCyx91AIeed3BI4klrVyoVTcrVN3XtjQoELQ1" rel="stylesheet"/>


<link rel="stylesheet" type="text/css" href="/Scripts/slick_slider/slick.css" />
<link rel="stylesheet" type="text/css" href="/Scripts/slick_slider/slick-theme.css" />
<link href="assets/Content/Utils/swiper.min.css?v=1.1402.2023.1024" rel="stylesheet" />
<script src="assets/Scripts/slick_slider/slick.min.js"></script>
<script src="assets/Scripts/Utils/swiper.min.js"></script>
<link href="assets/bundles/landingv1?v=-JOjI5LAvXjF1cLD8GiwOsl_smi5ee4qyknb3ShgOaU1" rel="stylesheet"/>

<link href="assets/Content/components/dynamicBanners_v1.0.css?v=1.1402.2023.1024" type="text/css" rel="stylesheet" />
<link href="assets/Content/partners/1131.css?v=1.1402.2023.1024" type="text/css" rel="stylesheet" />


            <link href="https://cdn-plat.apidigi.com/plat/prd/Img/Partners/1131/customWeb.css" type="text/css" rel="stylesheet" />






<script type="text/javascript">

    function closeCustomSelOnScroll(event) {

        if (event.target.classList && event.target.classList.value.includes('scrolled__content') && document.getElementsByClassName('tl_sel_custom_popup_reg_selected active').length > 0) {
            $('.tl_sel_popup_reg').customSelect({
                method: 'closeList'
            });
        }
    }
    document.removeEventListener('scroll', closeCustomSelOnScroll);
    document.addEventListener('scroll', function (event) {
        closeCustomSelOnScroll(event);
    }, true);


    if (performance.navigation.type == 2) {
          setTimeout(function () {

                if ('false' == 'true') {
                    $.ajax({
                            type: "POST",
                            url: '/tr/Common/CheckIsLoggedIn',
                            success: function (data) {
                        if (data.Reload == 'Reload' || '0' != data.Id) {
                            location.reload();
                        }
                    }

                });
              }

          }, 25);

        $.ajax({
            type: "POST",
            url: '/tr/Home/UpdateLanguage',
            data: "lang=" + document.documentElement.lang
        });
    }
    showpopup = true;
    function LoginTrigger() {
        $('#header_fix .loginDialog').trigger('click');
    }
    function RegisterTrigger() {
        $('.registerDialog').trigger('click');
    }
    function UsernameTrigger() {
        $('.username').trigger('click');
    }
    function WithdrawalTrigger() {
        $('.withdrawalDialog').trigger('click');
    }
    function DepositTrigger() {
        $('.depositDialog').first().trigger('click');
    }
    function DocumentTrigger() {
        $('.DocumentsDialog').first().trigger('click');
    }
    function FnLoginTrigger(param) {
        setCookie('mnUrl', param, 1);
        location.href = '/login/login';
    }
    function FnRegisterTrigger() {
        location.href = '/registration/register';
    }

    $(document).on('click',
        "#mnLogin",
        function () {
            setCookie('mnUrl', window.location.href, 1);
        });
    var offset = new Date().getTimezoneOffset();
    var hours = offset / -60;

    setCookie('ClientTimeZone', hours, 100);

    $(document).ready(function () {
        // scroll body to 0px on click
        $('.toTop').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        click = 0;
        /* Dropdown Start */
        var showDropDown = function (elem) {
            elem.toggle();
        };

        var hideDropdown = function (elem) {
            elem.hide();
        };

        $('a.header__dropdown-menu[data-toggle="dropdown"]').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            $('a.header__dropdown-menu').not(this).each(function () {
                hideDropdown($(this).next());
            });

            var menu = $(this).next();
            showDropDown(menu);
        });

        $(document).on('click', function (e) {
            var parent = $(e.target);

            if (!parent.hasClass('dropdown')) {
                hideDropdown($('.links_container'));
            }
        });
        /* Dropdown End */

        $.ajaxSetup({ cache: false });

        /* Registration */
        $(".registerDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href") + '?p=true';
            var w = 850;
            var h = 720;
            var p = null;
            var dg = 'tl_popup_dialog  js_popup_dialog flex_popup_content' ;
            var r = false;

            if (click == 0) {
                showPopup(url, 'registerContent', {
                    width: w,
                    height: h,
                    position: p,
                    dialogClass: dg,
                    responsive: r,
                });

            }
            click++;
        });
        /* Registration End */

        /* Login */
        $(document).on("click", '.loginDialog', function (e) {
            e.preventDefault();
            var url = $(this).data("href") + '?p=true';

            showPopup(url, 'loginContent', {
                position: null,
                dialogClass: 'tl_popup_dialog js_popup_dialog flex_popup_content',
                responsive: false,
            });

            click++;
        });


    /* Login End */

    /* Document page start*/

          $(".DocumentsDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'documents_tab', {
                width: 1600,
                height: 681,

            });
          });

        $(document).on("click",'.VoisoCallCenterDialog', function (e) {
        //$(".VoisoCallCenterDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'voisocallcenter_tab', {
                width: 1600,
                height: 681,

            });
          });


        /* Documents page End */

        /* USSD Password Change */
        $(".ussdpasswchangeDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showPopup(url, 'ussdpasswchangeContent', {
                width: 350,
                height: 400,

            });
        });
        /*USSD Password Change End */
         /* USSD Password Change */
        $(document).on("click",'.pokerpasswchangeDialog', function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showPopup(url, 'pokerpasswchangeContent', {
                width: 350,
                height: 400,
            });
        });
        $(".createPokerPasswordDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showPopup(url, 'createPokerPasswordDialog', {
                width: 350,
                height: 400,
                closeOnEscape: false

            });
        });
        /*USSD Password Change End */
        /* SelfExclusion popup */
        $(document).on("click", '.selfExclusionDialog', function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showPopup(url, 'selfExclusionContent', {
                width: 336,
                height: 'auto'
            });
        });

        /* SelfExclusion popup */

        /* Forgotpass */
        $(document).on("click", '.forgotPassDialog', function (e) {
            e.preventDefault();
            var url = $(this).data("href");


            showPopup(url, 'loginContent', {
                width: 335,
                height: 'auto'
            });
        });
        /* Forgotpass */

        /* ForgotUserName */
        $(document).on("click", '.forgotUsernamesDialog', function (e) {
            e.preventDefault();
            var url = $(this).data("href");


            showPopup(url, 'loginContent', {
                width: 335,
                height: 'auto'
            });
        });
        /* Forgotpass */

        /* Force Forgotpass */
        $(document).on("click", '#force_change_pass', function (e) {
            e.preventDefault();
            var url = this.href;
            showPopup(url, 'forceChangePassContent', {
                width: 335,
                height: 'auto'
            });
        });
        /* Force Forgotpass */

        /* changeLoginPass */
        $(document).on("click", '#changeLoginPass', function (e) {
            e.preventDefault();
            var url = this.href;
            showPopup(url, 'changeLoginPassContent', {
                width: 360,
                height: 'auto'
            });
        });
        /*changeLoginPass */
        /* Password Change */
        $(".passwchangeDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showPopup(url, 'passwchangeContent', {
                width: 350,
                height: 400,
                open: function(e, ui) {
                    $(this).load(url, function(data) {

                        // check if is user is not logged, redirect
                        if (!isLogged(data)) {
                            location.href = "/";
                            return false;
                        }

                        hideSpinner();
                    });
                }
            });
        });
        /* Password Change End */

        /* Profile */
        $(".profileDialog, .profileDialog1").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'profile_tab');
        });
        /* Profile End */


        /*Sporttransfer*/
        $(".sporttransferDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'transfer_to_sport_tab', {
                width: 1600,
                height: 681,
            });
        });
        /*Sporttransfer End*/

        /* Deposit */
        $(".depositDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            if ('1131' == "1040") {

                setTimeout(function () {

                    $(".tl_my_acc_cont_nav").remove();
                    $(".tl_my_acc_cont_content").css("width", "calc((100%) - 0px)");


                }, 5);

            }
            if ('1131' == "1201") {
                checkClientStatus(false, 'deposit_tab', url);
            } else {
                showAccountPopup(url, 'deposit_tab', {
                    width: 1600,
                    height: 681,
                });
            }
        });
        /* Deposit End */

        /* NotificationSettings */
        $(".notificationsettingsDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'notification_tab', {
                width: 1600,
                height: 681,
            });
        });
    /* NotificationSettings End */

        $(".bankAccountsDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'bankAccounts_tab', {
                width: 1600,
                height: 681,
            });
        });

        /* Withdraw */
        $(".withdrawalDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");
            if ('1131' == "1201") {
                checkClientStatus(false, 'withdraw_tab', url);
            } else {
                showAccountPopup(url, 'withdraw_tab', {
                    width: 1600,
                    height: 681,
                });
            }
        });
        /* Withdraw End */

        /* Transactions */
        $(".transactionsDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'transactions_tab', {
                width: 1600,
                height: 681,
            });
        });
        /* Transactions End */

        /* Transactions */
        $(".internalAgentDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'internalAgent_tab', {
                width: 1600,
                height: 681,
            });
        });
        /* Transactions End */

        /* Bonuses */
        $("#bonuses_tab, #sport_bonuses_tab, .bonusesDialog, .sportBonusesDialog").on("click", function (e) {

            e.preventDefault();
            var url = $(this).data("href");


            var tabId = $(this).attr("id");

            if ($(this).hasClass("bonusesDialog")) {
                tabId = "bonuses_tab";
            } else if ($(this).hasClass("sportBonusesDialog")){
                tabId = "sport_bonuses_tab";
            }

            showAccountPopup(url, tabId, {
                width: 1600,
                height: 681,
            });

        });

        $("#js_exchange_spin_history").delegate(".bonusesDialog", "click", function(e) {
            e.preventDefault();
            var url = $(this).data("href");
            var tabId = "bonuses_tab";

            showAccountPopup(url, tabId, {
                width: 1600,
                height: 681,
            });

        });
        /* Bonuses End */

        /*GameHystory*/
        $(".gamehystoryDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'history_tab', {
                width: 1600,
                height: 681,
            });
        });
        /*GameHystory End*/

        /*TournamentHystory*/
        $(".tournamenthystoryDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'historyTournament_tab', {
                width: 1600,
                height: 681,
            });
        });

        /* Bets and Winings Info */
        $(".betwininfoDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'betwininfo_tab');

        });
        /* Bets and Winings Info End */

        ///*Transfer To Friend*/
        $(".transferToFriendDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'transfer_to_friend_tab', {
                width: 1600,
                height: 681,
            });
        });
        ///*Transfer To Friend*/
        /*Referrer Report*/
        $(".referrerDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'referrer_tab', {
                width: 1600,
                height: 681,
            });
        });
        $(".selfLimitingDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'referrer_tab', {
                width: 1600,
                height: 681,
            });
        });
         $(".getBetWinInfoDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'betwininfo_tab', {
                width: 1600,
                height: 681,
            });
        });
        /*Referrer Report*/
        if ('False'.toLocaleLowerCase() == 'true')
        {
            /* responsibleGamingDialog Start */
            $(".responsibleGamingDialog").on("click", function(e) {

                e.preventDefault();
                var url = $(this).data("href");

                showAccountPopup(url,
                    'responsibleGamingDialog',
                    {
                        width: 1600,
                        height: 681,
                    });

            });
            /* responsibleGamingDialog End */
        }

        if ('False'.toLocaleLowerCase() == 'true') {
            $(".hasPromoDialog").on("click", function(e) {

                e.preventDefault();
                var url = $(this).data("href");

                showAccountPopup(url,
                    'hasPromoDialog',
                    {
                        width: 1600,
                        height: 681,
                    });

            });
        }

        $(document).on("click", '.twoFaSettingsDialog', function (e) {
            e.preventDefault();
            var url = $(this).data("href");
            showAccountPopup(url, 'twoFaSettings_tab');
        });

        /*Tabs Click*/
        var tabClicked = false;
        $(document).on('click', 'a.tl_my_acc_nav_item', function(e) {
            e.preventDefault();

            if (!$(this).hasClass('active')) {

                if (tabClicked) {
                    return false;
                }

                tabClicked = true;

                var tabUrl = $(this).data("href");
                var tabId = this.id;
                if ('False'.toLocaleLowerCase() == 'true' && '' == 'yes' && tabId == 'deposit_tab') {
                    tabClicked = false;
                    return false;
                }
                if ('1131' == '1201' && (tabId == 'deposit_tab' || tabId == 'withdraw_tab')) {
                    checkClientStatus(true, tabId, tabUrl);
                    tabClicked = false;
                } else {
                    loadTab(tabId, tabUrl, function () {
                        tabClicked = false;
                        activateTab(tabId);
                    });
                }
            }
        });

        /* Inbox */
        $(".inboxDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showPopup(url, 'inboxContent', {
                width: 1600,
                height: 720,
                open: function(e, ui) {
                    $(this).load(url, function(data) {

                        // check if is user is not logged, redirect
                        if (!isLogged(data)) {
                            location.href = "/";
                            return false;
                        }

                        hideSpinner();
                    });
                }
            });


            $(window).resize(function() {
                $("#inboxContent").dialog("option", "position", {my: "center", at: "center", of: window});
            });

        });
        /* Inbox End */


        /* Clock Start */

        if ($('.time').length) {
            startTime();
        }

        /* Clock End */
    });

    /*Tabs Start*/
    function activateTab(tabId) {
        $('.tl_my_acc_nav_item').removeClass('active');
        $('#' + tabId).addClass('active');
    }

    function loadTab(tabId, tabUrl, callback) {
        callback = callback || null;

        showSpinner();

        $('#tl_profile_content').fadeOut(300, function() {
            $(this).load(tabUrl, function (data) {

                // check if is user is not logged, redirect
                if (!isLogged(data)) {
                    location.href = "/";
                    return false;
                }

                hideSpinner();
                changeAccountPopupHeight(tabId);

                $('#tl_profile_content').fadeIn(300);

                if (callback) {
                    callback();
                }
            });
        });
    }
    /*Tabs End*/

    /*Popups Start*/

    function changeAccountPopupHeight(tabId) {
        tabId = tabId || null;

        if (!tabId) {
            return false;
        }

        var dialogHeight = null;

        switch(tabId) {
        case 'profile_tab':
            dialogHeight = 680;
            break;
        case 'withdraw_tab':
            dialogHeight = 720;
            break;
        case 'deposit_tab':
            dialogHeight = 800;
            break;
        case 'transfer_to_sport_tab':
            dialogHeight = 650;
            break;
        case 'responsibleGamingDialog':
            dialogHeight = 627;
            break;
        default:
            dialogHeight = 720;
        }

        if ($(window.top).height() < 800) {
            dialogHeight = 650;
        }


        if (dialogHeight) {
            $('#accountDialog').dialog("option", {
                height: dialogHeight
            });

            $(window).resize(function() {
                $("#accountDialog").dialog("option", "position", {my: "center", at: "center", of: window});
            });
            if (dialogHeight == 650 && 'False'.toLowerCase() == 'true')
            {
                $('#tl_scroll').height("auto");
            }

        }
    }

    function isLogged(data) {
        var isLogged = $(data).find('#isLogged');
        return isLogged.val() > 0;
    }

    function showAccountPopup(pageUrl, tabId) {

        var popupOptions = {
            width: 1600,
            height: screen.height - 300,
            clickOut: false
        };

        showPopup(pageUrl, 'depositContent', popupOptions, function (dialogOptions) {


            var popupContainer = '<div class="tl_my_acc_cont flex" id="accountDialog">';
            popupContainer += '<div class="tl_my_acc_cont_nav">';

            if ('1131' != '1083') {

                if ('False'.toLowerCase() == 'true') {
                    popupContainer += '<a class="diff_tl_my_acc_nav_item" href="/account/profilestatic">Account Summary</a>';
                    popupContainer += '<a class="diff_tl_my_acc_nav_item" href="/account/TransactionsHistory">Transactions</a>';
                }
                else if ('1131' == '1040') {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Profile" id="profile_tab">HESABIM</a>';
                }
                else if ('1131' == '1117') {
                   popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Profile" id="profile_tab">Kişisel bilgiler</a>';
                } else {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Profile" id="profile_tab">Profilim</a>';
                }
                if ('1131' == '1201') {
                    if (0 != 3) {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/DocumentsUpload" id="documents_tab">Identifications</a>';
                    }
                } else if ('False'.toLowerCase() == 'true' || ('1131' == '1129' && 'False' == 'True')) {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/DocumentsUpload" id="documents_tab">Belgeler</a>';
                }

                if (''.length == 0 || '1131' == '1177') {
                    if ('False'.toLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Para Yatırma</a>';
                    } else if ('1131' == '1081') {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Deposit</a>';
                    } else if ('1131' == '1136' || '1131' == '1180') {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Deposit</a>';
                    } else if ('1131' == '1117') {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">PARA YATIR</a>';
                    } else if ('1131' == '1129') {
                        if ('False' != 'True') {
                            popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Para Yatırma</a>';
                        }
                    } else if ('1131' == '1004') {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Deposit</a>';
                    } else if('1131' == '1174') {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">PARA YATIR</a>';
                    } else if ('1131' == '1026') {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Para Yatır</a>';
                    }
                    else {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Para Yatırma</a>';
                    }
                    if ('False'.toLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Withdrawal</a>';
                    } else if ('1131' == '2') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Para &#199;ekme</a>';
                        if ('' != '') {
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/' + 'tr' + '/Account/BankAccounts" id="bankAccounts_tab">Bank accounts</a>';
                        }
                    } else if ('1131' == '1094') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Withdraw</a>';
                    }else if ('1131' == '1117') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Para &#231;ek</a>';
                    }
                    else if ('1131' == '1086') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">T&#203;RHEQJE</a>';
                    }
                    else if ('1131' == '1129') {
                        if ('False' != 'True') {
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Para &#199;ekme</a>';
                        }
                    } else {
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Para &#199;ekme</a>';
                    }
                }

                if ('False'.toLowerCase() == 'true') {
                    popupContainer += '<a class="diff_tl_my_acc_nav_item" href="/Account/InviteFriends">Refer Friends</a>';

                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Bonus/ClientBonusReport" id="bonuses_tab">Bonuses';
                    if ('0' > 0) {
                        popupContainer += '<span class="alb_bonus_count">' +0+'</span>';
                    }
                    popupContainer +='</a >';

                    popupContainer += '<a class="diff_tl_my_acc_nav_item" href="/account/resetpassword">Change Password</a>';
                    popupContainer += '<a class="diff_tl_my_acc_nav_item" href="/account/ReferrerReport">Arkadaş Bonusu Raporu</a>';
                    popupContainer += '<a class="diff_tl_my_acc_nav_item" href="/account/gamehistory">Oyun Ge&#231;mişi</a>';
                }

                if ('False'.toLowerCase() != 'true') {
                    if ('1131' == '1086') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">HISTORIA E LOJ&#203;RAVE</a>';
                    }
                    else if ('1131' == '1158') {
                         popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">Oyun Ge&#231;mişi</a>';
                    }
                    else {
                        if ('1131' == '1072'){
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">Games History</a>';
                        }
                        else if ('1131' != '1201') {
                            if ('1131' == '1130') {
                                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">Bet History</a>';
                            } else if ('1131' == '1093' || '1131' == '1096') {
                                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">BAHİS GE&#199;MİŞİ</a>';
                            }else if ('1131' == '1197') {
                                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">BAHİS GE&#199;MİŞİ</a>';
                            } else if ('1131' != '2') {
                                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">BAHİS GE&#199;MİŞİ</a>';
                            }else {
                                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">Game history</a>';
                            }

                        }
                    }
                    if ('1131' == '2') {
                        if ('False' == 'True') {
                            popupContainer += '<a class="tl_my_acc_nav_itemsp" target="_self" href="' + 'http://betwoon415.com/' + '#/page/bet-history">Sport Bahis Ge&#231;mişi</a>';
                        } else {
                            popupContainer += '<a class="tl_my_acc_nav_itemsp" href="' + 'https://sport./tr' + '/Sport/SportAccount">Sport Bahis Ge&#231;mişi</a>';
                        }
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/TournamentHistory" id="historyTournament_tab">Turnuva Ge&#231;mişi</a>';
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/NotificationSettings" id="notification_tab">Bildirimleri</a>';
                    }
                    else if ('1131' == '1004') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/NotificationSettings" id="notification_tab">Bildirimleri</a>';
                    }
                    else {
                        if ('1131' == '1040') {
                            popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/SportAccount">BAHİS GE&#199;MİŞİ</a>';
                        }
                        else if ('1131' == '1075' || '1131' == '1195'  || '1131' == '1199') {
                            if ('False' == 'True' || sessionStorage.getItem("SportView") == "africanView") {
                                popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/africanview/?page=BetsHistory">BAHİS GE&#199;MİŞİ</a>';
                            }
                            else if ('False' == 'True' || sessionStorage.getItem("SportView") == "paperview") {
                                popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/paperview/?page=BetsHistory">BAHİS GE&#199;MİŞİ</a>';
                            }
                            else if ('False' == 'True') {
                                popupContainer += '<a class="tl_my_acc_nav_itemsp" href="#/page/bet-history">BAHİS GE&#199;MİŞİ</a>';
                            } else if ('False' == 'True' || sessionStorage.getItem("SportView") == "asianView") {
                                popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/asianview#/page/bet-history">BAHİS GE&#199;MİŞİ</a>';
                            }else if ('False' == 'True' || sessionStorage.getItem("SportView") == "latinView") {
                                 popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/lsportview/bethistory">Sport Bahis Ge&#231;mişi</a>';
                            } else {
                                popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/SportAccount">BAHİS GE&#199;MİŞİ</a>';
                            }
                        }
                        else if ('False' == 'True') {
                            popupContainer += '<a class="tl_my_acc_nav_itemsp" target="_self" href="#/page/bet-history">Sport Bahis Ge&#231;mişi</a>';
                        }
                        else {
                            if ('1131' != '1101') {
                                if ('1131' == '1115' || '1131' == '1182' || '1131' == '1130') {
                                    if ('1131' == '1130') {
                                        popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/lsportview/bethistory">Sport Bet History</a>';
                                    }
                                    else {
                                        popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/lsportview/bethistory">Sport Bahis Ge&#231;mişi</a>';
                                    }
                                } else {
                                    if ('1131' == '1117') {
                                        if (sessionStorage.getItem("SportView") == "latinView") {
                                            popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/lsportview/bethistory">Bahis Ge&#231;mişi</a>';
                                        } else {
                                        popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/SportAccount">Bahis Ge&#231;mişi</a>';
                                        }
                                    } else {
                                        if ('1131' == '1072' && 'False' != 'True') {
                                            popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/lsportview/bethistory">Sport Bet history</a>';
                                        } else if (('1131' == '1178' || '1131' == '1108' || '1131' == '1107') && sessionStorage.getItem("SportView") == "latinView") {
                                            popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/lsportview/bethistory">Sport Bahis Ge&#231;mişi</a>';
                                        } else {
                                            if ('1131' == '1158') {
                                                popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/SportAccount">SPOR BAHİS GE&#199;MİŞİ</a>';
                                            } else {
                                                popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/SportAccount">Sport Bahis Ge&#231;mişi</a>';
                                            }

                                        }

                                    }

                                }

                            }
                        }

                    }


                    if ('1131' == '1171' || '1131' == '1187') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/TournamentHistory" id="historyTournament_tab">Turnuva Ge&#231;mişi</a>';
                    }
                    switch ('1131') {
                        case '1':
                        case '112':
                            popupContainer += '<a class="tl_my_acc_nav_itemsp promoted" href="/Sport/TournamentsHistory">Sport Tournament</a>';
                            break;
                        case '105':
                             popupContainer += '<a class="tl_my_acc_nav_itemsp promoted" href="/Sport/TournamentsHistory">Sport Tournament</a>';
                            break;
                    }
                    if ('1131' == '1040') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Bonus/ClientBonusReport" id="bonuses_tab">BONUS GE&#199;MİŞİ';
                        if ('0' > 0) {
                            popupContainer += '<span class="alb_bonus_count">' +0+'</span>';
                        }
                        popupContainer += '</a>';
                    } else if ('1131' == '1117') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Bonus/ClientBonusReport" id="bonuses_tab">Bonuslarım';
                        if ('0' > 0) {
                            popupContainer += '<span class="alb_bonus_count">' +0+'</span>';
                        }
                        popupContainer += '</a>';
                    } else if ('1131' == '1182') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Bonus/ClientBonusReport" id="bonuses_tab">Bonuses';
                        if ('0' > 0) {
                            popupContainer += '<span class="alb_bonus_count">' +0+'</span>';
                        }
                        popupContainer += '</a>';
                    }
                    else {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Bonus/ClientBonusReport" id="bonuses_tab">Bonuslar';
                        if ('0' > 0) {                          
                            popupContainer += '<span class="alb_bonus_count ' +  '' + '">' +0+'</span>';                                                                         
                        }
                        popupContainer += '</a>';
                    }
                    if ('1131' == '2') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/PendingWithdrawals?typeTransac=2" id="transactions_tab">Finansal İşlemler</a>';
                    } else {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/TransactionsHistory?typeTransac=2" id="transactions_tab">Finansal İşlemler</a>';
                    }

                    if ('False'.toLocaleLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/Account/OpenTwoFaSettings" id="twoFaSettings_tab">2 Aşamalı G&#252;venlik</a>';
                    }
                    if ('False'.toLocaleLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/Agent/Index" id="internalAgent_tab">Agent Sistem Raporu</a>';
                    }

                    if ('False'.toLocaleLowerCase() == 'true') {
                        if ('1131' == "1072") {
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/ResponsibleGaming" id="responsibleGamingDialog">Self Limitation</a>';
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/ResponsibleGaming/GetBetWinInfo" id="betwininfo_tab">Responsible Gaming</a>';
                        } else {
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/ResponsibleGaming" id="responsibleGamingDialog">Responsible Gaming</a>';
                        }
                    }

                   if ('False'.toLocaleLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/CheckPromoCode" id="hasPromoDialog">Promo Kodlar</a>';
                    }

                switch ('1131') {
                case '112':
                case '105':
                case '116':
                case '1013':
                case '1001':
                case '101':
                case '1197':
                case '1012':
                case '1018':
                case '1021':
                case '1041':
                case '1043':
                case '1046':
                case '1052':
                case '1053':
                case '1162':
                case '1054':
                case '1056':
                case '1051':
                case '1055':
                case '1066':
                case '1074':
                case '1086':
                case '1082':
                case '1081':
                case '1':
                case '1020':
                case '1093':
                case '1107':
                case '1108':
                case '1102':
                case '1143':
                case '1133':
                case '1134':
                case '1111':
                case '1140':
                case '1163':
                case '111':
                case '1165':
                case '1159':
                case '1200':
                case '1137':
                case '1168':
                case '1164':
                case '1123':
                case '1083':
                case '1175':
                case '1120':
                case '1158':
                         popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/ReferrerReport" id = "referrer_tab">Arkadaş Bonusu Raporu</a>';
                        break;
                case '1023':
                case '1044':
                case '1049':
                case '1079':
                case '1024':
                case '115':
                          popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/ReferrerReport" id = "referrer_tab">Referrer Report</a>';
                        break;
                case '1004':
                case '1170':
                case '1141':
                case '1179':
                case '1177':
                case '1187':
                case '1184':
                case '1115':
                case '1130':
                case '1194':
                case '1206':
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/ReferrerReport" id = "referrer_tab">Arkadaş Bonusu Raporu</a>';
                            break;
               }
                    if ('1131' == '105' || '1131' == '1187') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/NotificationSettings" id="notification_tab">Bildirimleri</a>';
                    }
                    if ('1131' == "105" || '1131' == "1120" || '1131' == "1036") {
                        if ('False' == 'True' && '0' > 0 && 'False' == 'True') {
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/_FriendToFriendWithdrawal" id="transfer_to_friend_tab">Transfer to Friend</a>';
                        }
                    }
                }

                if ('False' == 'True' && 'False' == 'True') {
                        popupContainer +=
                                '<a class="tl_my_acc_nav_item" data-href="/tr/Account/VoisoCallCenter" id="voisocallcenter_tab">REQUEST A CALL</a>';
                }


                popupContainer += '</div>';
                popupContainer += '<div class="tl_my_acc_cont_content tl_popup_clr">';
                popupContainer += '<div class="tl_head_close dont-shrink tl_my_acc_close"></div>';
                if ('False'.toLowerCase() != 'true') {
                    popupContainer += '<div id="tl_scroll" class="profile_popup_content scrolled__content">';
                }
                popupContainer += '<div id="tl_profile_content"></div>';
                if ('False'.toLowerCase() == 'true')
                {
                    popupContainer += '</div>';
                }


            } else {

                //Oriontip menu

                popupContainer += '<span class="tl_my_acc_nav_item">PROFILE</span>';

                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Profile" id="profile_tab">Personal Details</a>';

                if ('False'.toLowerCase() == 'true') {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/DocumentsUpload" id="documents_tab">Belgeler</a>';
                }
                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/ContactDetails" id="details_tab">Contact Details</a>';

                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/ReferrerReport" id = "referrer_tab">Arkadaş Bonusu Raporu</a>';

                 if ('False'.toLocaleLowerCase() == 'true') {
                     if ('1131' == "1083") {
                           popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/ResponsibleGaming" id="responsibleGamingDialog">Self Limitation</a>';
                           popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/ResponsibleGaming/GetBetWinInfo" id="betwininfo_tab">Responsible Gaming</a>';
                     } else {
                          popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/ResponsibleGaming" id="responsibleGamingDialog">Responsible Gaming</a>';
                          popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/ResponsibleGaming/GetBetWinInfo" id="betwininfo_tab">Information on Bets</a>';
                     }

                }

                popupContainer += '<span class="tl_my_acc_nav_item">My Wallet</span>';

                popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Para Yatırma</a>';


                if (''.length == 0) {
                    if ('1131' == '1094') {
                         popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Withdraw</a>';
                    } else {
                         popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Para &#199;ekme</a>';
                    }


                 }

                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/TransactionsHistory?typeTransac=2" id="transactions_tab">Finansal İşlemler</a>';

                popupContainer += '<span class="tl_my_acc_nav_item">MY BETS</span>';

                if ('False' == 'True') {
                    popupContainer += '<a class="tl_my_acc_nav_itemsp" target="_self" href="#/page/bet-history">Sport Bahis Ge&#231;mişi</a>';
                }
                else {
                   popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/SportAccount">Sport Bahis Ge&#231;mişi</a>';

                }

                if ('False'.toLocaleLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/Account/OpenTwoFaSettings" id="twoFaSettings_tab">2 Aşamalı G&#252;venlik</a>';
                    }
                popupContainer += '<span class="tl_my_acc_nav_item">Bonuslar</span>';

                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Bonus/BonusHistory?scope=0" id="bonuses_tab">New Bonuses</a>';

                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Bonus/BonusHistory?showHistory=True&amp;scope=0" id="bonuses_all_tab">Bonuses History</a>';

                if ('False' == 'True') {
                    popupContainer +=
                            '<a class="tl_my_acc_nav_item" data-href="/tr/Account/VoisoCallCenter" id="voisocallcenter_tab">REQUEST A CALL</a>';
                }
               if ('False'.toLocaleLowerCase() == 'true') {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/Agent/Index" id="internalAgent_tab">Agent Sistem Raporu</a>';
                }
            popupContainer += '</div>';
            popupContainer += '<div class="tl_my_acc_cont_content tl_popup_clr">';
            popupContainer += '<div class="tl_head_close dont-shrink tl_my_acc_close"></div>';
                popupContainer += '<div id="tl_scroll"  class="profile_popup_content scrolled__content">';
            popupContainer += '<div id="tl_profile_content"></div></div';

            }

            popupContainer += '</div>';
            popupContainer += '</div>';

            dialogOptions.open = function() {
                $('#tl_profile_content').load(pageUrl, function (data) {

                    // check if is user is not logged, redirect
                    if (!isLogged(data)) {
                        location.href = "/";
                        return false;
                    }

                    // set active tab
                    activateTab(tabId);

                    // hide spiiner
                    hideSpinner();

                    changeAccountPopupHeight(tabId);
                });
            };
            $(popupContainer).appendTo("body").dialog(dialogOptions);
        });
       showpopup = false;
    }

    function showPopup(pageUrl, containerId, popupOptions, callback) {
        var passChangeRequired = 'false';
        if (passChangeRequired == 'true' && containerId != 'forceChangePassContent') {
            showPopup('/Account/ForceChangePassword', 'forceChangePassContent', {
                width: 335,
                height: 'auto'
            });
            return;
        }
        if ('False'.toLocaleLowerCase() == 'false') {
            $('body').addClass('ofh');
        }
        $(window).scrollTop(0);
        callback = callback || false;

        // setting options
        var options = popupOptions || {};

        // setting dialog options
        var dialogOptions = {

            clickOut: false,
            showTitleBar: false,
            showCloseButton: false,
            responsive: true,
            dialogClass: "tl_popup_dialog",
            modal: true,
            draggable: false,
            resizable: false,
            closeOnEscape:true,
            show: {
                effect: "fadeIn",
                duration: 300
            },
            hide: {
                effect: "fadeOut",
                duration: 300
            },
            position: {},
            open: function(e, ui) {
                $(this).load(pageUrl, function() {
                    hideSpinner();
                });
            },
            close: function() {
                $(this).remove();
                if (!$('body').hasClass('no_scroll')) {
                    $('body').removeClass('ofh');
                }
                $('body').removeClass('bodyscroll');
                if ('False'.toLowerCase() == 'true')
                {
                    if (containerId == "inboxContent") {
                        var url = window.location.href;
                        if (url.includes('/?account=1')) {
                            url = url.replace('/?account=1', '');
                            window.location.href = url;
                        }
                    }
                }

            }
        };

        dialogOptions = $.extend(dialogOptions, options);

        if (containerId == 'forceChangePassContent' || containerId == 'selfExclusionContent' || containerId == 'changeLoginPassContent') {
            dialogOptions = $.extend(dialogOptions, { closeOnEscape:false});
        }

        showSpinner();

        if (!callback) {
            $('<div />', {
                    id: containerId,
                    class: 'dialog'
                })
                .appendTo("body").dialog(dialogOptions);
        } else {
            callback(dialogOptions);
        }
        if (dialogOptions.position == null) {
            $('.js_popup_dialog').removeAttr('style');
            $('#registerContent').removeAttr('style');
            $('#loginContent').removeAttr('style');
        }
    }

    $(document).on("click", ".tl_head_close", function (e) {
        e.preventDefault();
        $(this).closest(".ui-dialog-content").dialog("close");
        click = 0;
        showpopup = true;
    });

    $(document).on('keyup', function(e) {
          if (e.key == "Escape") showpopup = true;
    });


    $(document).on("click", ".tl_my_acc_nav_itemsp", function (e) {
        $(this).closest(".ui-dialog-content").dialog("close");
        click = 0;
    });
    /*Popups End*/

    jQuery(document).on('keyup', function (evt) {
        if (evt.keyCode == 27) {
            click = 0;
        }
    });

    /*Spinner Start*/
    function showSpinner() {
        $('#tl_loader').removeClass('hidden');
    }

    function hideSpinner() {
        $('#tl_loader').addClass('hidden');
    }
    /*Spinner End*/

    /* Check Checkboxes Start */
    function chkBoxFunc(id) {

        if ($(id).is(':checked')) {
            $(id).val('true');
        } else {
            $(id).val('false');
        }
    }
    /* Check Checkboxes End */

    /* Clock Start */

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

    function checkTimeZone2(z) {
        return "GMT" + (z > 0 ? "-" + z : "+" + z * -1);
    }

    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        var z = today.getTimezoneOffset() / 60;

        // add a zero in front of numbers<10
        h = checkTime(h);
        m = checkTime(m);
        s = checkTime(s);
        $('.time').html(h + ":" + m + ":" + s);

        z = checkTimeZone2(z);
        $('.zone').html(z);

        t = setTimeout(function () {
            startTime();

            if ('tr' == 'fa' && 'False'.toLowerCase() == 'true')
               {
                String.prototype.toPersianDigit = function (a) {

                    if (this == $(".time").text()) {
                        return this.replace(/\d+/g,
                            function(digit) {
                                var enDigitArr = [], peDigitArr = [];
                                for (var i = 0; i < digit.length; i++) {
                                    enDigitArr.push(digit.charCodeAt(i));
                                }
                                for (var j = 0; j < enDigitArr.length; j++) {
                                    peDigitArr.push(
                                        String.fromCharCode(enDigitArr[j] + ((!!a && a == true) ? 1584 : 1728)));
                                }
                                return peDigitArr.join('');
                            });
                    } else {
                        return this;
                    }



                };

                function TraceNodes(Node) {
                    if (Node.nodeType == 3)  //TextNode
                        Node.nodeValue = Node.nodeValue.toPersianDigit();
                    else
                        for (var i = 0; i < Node.childNodes.length; i++)
                            TraceNodes(Node.childNodes[i]);
                }

                TraceNodes(document.getElementById("myTime"));
            }

        }, 500);
    }

    /* Clock End */

    /*On Escape close select menus */
    $(document).keyup(function(e) {
        if (e.keyCode === 27) {
            $(this).customSelect({
                method: 'closeList'
            });
        }
    });
    $(document).on("click", ".close_youtube_banner", function () { $('#youtube_banner').html('').hide(); });

    function openYoutubeVideo(link) {
        if (document.getElementById('youtube_banner') == null) {
            $('body').append('<div id="youtube_banner" style="display: none;"></div>');
        }

        $('#youtube_banner').html('<div class="tl_head_close close_youtube_banner transition200ms"></div><iframe width="800" height="500" src="' + link + '?autoplay=1"></iframe>').show();
    }

    function setCookie(cname,cvalue,exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    /*Dynamic Payments*/
    function showDynLoading(event) {
        $(event).hide();
        $($(event).parent().next()).show();
    }

    function hideDynLoading(event) {
        $($(event).parent().next()).hide();
        $(event).show();
    }

    function validateDDControl(el) {
        var elP = $(el).parent() ? $(el).parent()[0] : el;
        var inpValErr = "input-validation-error";
        var isVal = true;
        if (!el.value && elP.classList.toString().indexOf(inpValErr) === -1) {
            elP.classList.add(inpValErr);
            var ps = document.createElement('span');
            ps.className = "reg_err_mess field-validation-error";
            var ns = document.createElement('span');
            ns.innerHTML = el.getAttribute("data-val-required");
            ps.appendChild(ns);
            $(elP).parent()[0].appendChild(ps);
            isVal = false;
        } else if (elP.classList.toString().indexOf(inpValErr) !== -1 && el.value) {
            elP.classList.remove(inpValErr);
            var remEl = $(elP).parent()[0].getElementsByClassName("field-validation-error");
            if (remEl && remEl[0]) {
                $(remEl[0]).parent()[0].removeChild(remEl[0]);
            }
            isVal = true;
        } else if (!el.value && elP.classList.toString().indexOf(inpValErr) !== -1) {
            var e = $(elP).next();
            if (e && e[0]) {
                e[0].innerHTML = '<span>' + el.getAttribute("data-val-required") + '</span>';
                isVal = false;
            }
        }
        return isVal;
    }

    function validateDynamicForm(el) {
        var patt = new RegExp(el.getAttribute("data-val-regex-pattern"));
        var inpValErr = "input-validation-error";
        var parentEl = $(el).parent()[0];
        var test = patt.test(el.value);
        var minL = el.getAttribute("minlength");
        if (el.value.length === 0 || el.value.length >= parseInt(minL)) {
            el.classList.remove(inpValErr);
            var nxt = $(el).next();
            if (nxt && nxt[0]) {
                parentEl.removeChild($(el).next()[0]);
            }
        }

        if ((!test || !el.value) && el.classList.toString().indexOf(inpValErr) === -1) {
            el.classList.add(inpValErr);
            var ps = document.createElement('span');
            ps.className = "reg_err_mess field-validation-error";
            var ns = document.createElement('span');
            ns.innerHTML = !el.value ? el.getAttribute("data-val-required") : el.getAttribute("data-val-regex");
            ps.appendChild(ns);
            parentEl.appendChild(ps);
        } else if (el.classList.toString().indexOf(inpValErr) !== -1 && test) {
            el.classList.remove(inpValErr);
            var remEl = parentEl.getElementsByClassName("field-validation-error");
            if (remEl && remEl[0]) {
                parentEl.removeChild(remEl[0]);
            }
        } else if ((!test || !el.value) && el.classList.toString().indexOf(inpValErr) !== -1) {
            var e = $(el).next();
            if (e && e[0]) {
                e[0].innerHTML = '<span>' + (!el.value ? el.getAttribute("data-val-required") : el.getAttribute("data-val-regex")) + '</span>';
            }
        }
    }

    /*End Dynamic Payments*/

    $(document).on('click', '.openLogin',
        function() {
            LoginTrigger();
            return false;
        });


    $(document).on('click', '.openRegistration',
        function () {
            RegisterTrigger();
            return false;
        });

</script>
<script type="text/javascript">
    BalanceUpdater.PlayerId = 0;
    BalanceUpdater.start();
</script>






































<script>

    $(window).on('load', function () {
        // anims
        function jackpotAnim(elnum) {
            let urlCdn = '';
             $('.top_jackpots__anim').eq(elnum).css('background-image', 'url(https://cdn-plat.apidigi.com/plat/prd/Img/icons/redesign/jackpot_backgr.png)');
            var jackpotAnimPos = 0;
            var jackpotAnimInt = setInterval(function () {
                $('.top_jackpots__anim').eq(elnum).css('background-position', '0px -' + jackpotAnimPos + 'px');
                jackpotAnimPos = jackpotAnimPos + 92.6;
                if (jackpotAnimPos > 2500) {
                    clearInterval(jackpotAnimInt);
                }
            }, 25);
        }

        for (var i = 0; i < 4; i++) {
            (function (i) {
                setTimeout(function () { jackpotAnim(i) }, i * 400);
            })(i);
        }
        setInterval(function () {
            for (var i = 0; i < 4; i++) {
                (function (i) {
                    setTimeout(function () { jackpotAnim(i) }, i * 400);
                })(i);
            }
        }, 10000);
    })
</script>

    <style>

        .tl_loader {
            background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/loader.gif') !important;
        }
    </style>

<script>
    function getNewBonusHistory(showHistory) {
        let allowNewBonusHistoryClick = true;

        if (allowNewBonusHistoryClick) {
            allowNewBonusHistoryClick = false;
            $.ajax({
                url: "/tr/Bonus/NewBonusHistory",
                type: "POST",
                data: "showHistory=" + showHistory,
                datatype: "json",
                success: function (result) {
                    // check if is user is not logged, redirect
                    if (!isLogged(result)) {
                        location.href = "/";
                        return false;
                    }

                    $("#tl_profile_content").html(result);
                    allowNewBonusHistoryClick = true;
                }
            });
        }
    }
</script>
        <script src="assets/Scripts/Common.js"></script>




        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
            <!-- Google Tag Manager -->
        <script>
    (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-P7VH6V5');</script>
        <!-- End Google Tag Manager -->
</head>
<body class="">

        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7VH6V5" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->






    <a data-href="../Home/ForgotPass" class="tl_popup_link recover_btn popup_lbl_2 forgotPassDialog" id="forgotpasslink"></a>

    
    <a class="hidden" href="/Account/ForceChangePassword" id="force_change_pass"></a>
    <div class="tl_loader_box hidden" id="tl_loader">
        <div class="tl_loader"></div>
    </div>

    <div id="app" class="toto_landint_container">

        

<div id="header_fix" class="tl_header_top_row">
    <div class="tl_header_top_row_fix d-flex">
        <div class="tl_logo ">
            <a href="/" style="background-image:url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/logo.png')"></a>
        </div>

        <div class="d-flex align-items-center px-2 tl_head_promos_btns">          
            <a href="https://rebrand.ly/betwoonortalkkk" class="top_header_link" title="Ortaklık">
                <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/regulation.png" alt="Ortaklık" />
            </a>

            <a href="https://rebrand.ly/betwoonmobil" target="_blank" class="top_header_link" title="Mobil Uygulama">
                <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/mobile-app.png" alt="mobile app" />
            </a>
            <a href="https://rebrand.ly/canlitvvv" class="top_header_link" target="_blank" title="Canlı TV" rel="noopener">
                <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/canlitv.png" alt="canlitv" />
            </a>
            <a href="https://rebrand.ly/betwoonyatirim" class="top_header_link" target="_blank" title="nasil" rel="noopener">
                <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/nasil.png" alt="nasil" />
            </a>   
            <a href="https://rebrand.ly/Bonustalepp" class="top_header_link" target="_blank" title="bonus" rel="noopener">
                <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/bns.png" alt="bonus" />
            </a>
        </div>
        <div class="tl_login_container d-flex">
            <div class="d-flex align-items-center">
                <a class="mx-1" href="https://rebrand.ly/carkkk"><img class="header_img" src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/Cark.png"></a>
                <a class="mx-1" href="https://rebrand.ly/beniaraaaaa"><img class="header_img" src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/beniara.png"></a>

            </div>

                <div class="d-flex align-items-center">
<a class="registerDialog tl_btn tl_btn-accent mx-1" automation="open_register" data-dialog-title="New User" data-href="/Registration/Register1131">&#220;YE OL</a>
                    <a class="loginDialog tl_btn mx-1" data-dialog-title="Login" data-href="/Login/Login" automation="home_login_button">&#220;YE GİRİŞİ</a>

    <div class="tl_drop_down tl_acc_lang d-flex tl_btn ternBtn">
        <a class="d-flex header__dropdown-menu align-items-center" href="#" data-toggle="dropdown">
                        <span class="flex-shrink-0 lang tr" style="background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/flags/mob_flags.png')"></span>

          <i class="dynamic_icon dynamic_icon-arrow">&#57956</i>
        </a>
        <div class="links_container scrolled__content" id="LanguageBarSorting">
                        <a class="tl_dropdown_style d-flex px-1 en" href="/en/ ">

                                <span class="flex-grow-1 text-truncate text-left">English</span>
                                <span class="flex-shrink-0 lang en" style="background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/flags/mob_flags.png')"></span>
                        </a>

        </div>
    </div>

                </div>
        </div>

    </div>
</div>

<!--    Secund Row-->








<div class="tl_header_bot_row dynamic_menu header__bottom d-flex align-items-center">
    <div class="tl_header_bot_row_fix flex align-items-center" id="js_dy_hdr_cont">
        <div class="tl_header_navigation tl_bot_header_cont tl_responsive_header_navigation hdr_effect" id="js_dy_hdr">
                        <div>
                            <a href='/Sport' target="_self" title="SPOR BAHİSLERİ"
                               class="tl_main_nav_item js_menu_links  ">
                                <span class="tl_main_nav_item-inner">
                                    
                                    SPOR BAHİSLERİ
                                    
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href='/Sport/Live' target="_self" title="CANLI BAHİS"
                               class="tl_main_nav_item js_menu_links  ">
                                <span class="tl_main_nav_item-inner">
                                    
                                    CANLI BAHİS
                                    
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href='/Sport/esportview' target="_self" title="E-SPOR"
                               class="tl_main_nav_item js_menu_links  ">
                                <span class="tl_main_nav_item-inner">
                                    
                                    E-SPOR
                                    
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href='/Lobby/Casino/Main' target="_self" title="3D SLOT SALONU"
                               class="tl_main_nav_item js_menu_links  ">
                                <span class="tl_main_nav_item-inner">
                                    
                                    3D SLOT SALONU
                                    
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href='/Lobby/Livecasino/Main' target="_self" title="CANLI CASİNO"
                               class="tl_main_nav_item js_menu_links  ">
                                <span class="tl_main_nav_item-inner">
                                    
                                    CANLI CASİNO
                                    
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href='/Lobby/Tvgames/Main' target="_self" title="TV OYUNLARI"
                               class="tl_main_nav_item js_menu_links  ">
                                <span class="tl_main_nav_item-inner">
                                    
                                    TV OYUNLARI
                                    
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href='/Lobby/Virtualsport/Main' target="_self" title="SANAL BAHİSLER"
                               class="tl_main_nav_item js_menu_links  ">
                                <span class="tl_main_nav_item-inner">
                                    
                                    SANAL BAHİSLER
                                    
                                </span>
                            </a>
                        </div>
                        <div class="js_header_dropdown header_nav__dropdown_button">

                            <a title="HIZLI OYUNLAR" href='/Lobby/FastGames/Main' class="tl_main_nav_item js_menu_links ">
                                <span class="tl_main_nav_item-inner">
                                    
                                    HIZLI OYUNLAR
                                    
                                </span>
                            </a>
                            <div class="header_nav__dropdown">
                                        <a href='/Play/Real/CashShow-Fastgames'
                                           target="_self"
                                           title="Cashshow"
                                           class="tl_main_nav_item js_menu_links bg-tert  ">
                                            <span class="tl_main_nav_item-inner ">
                                                
                                                Cashshow
                                                <span class='dynamic_bagge hot'>Hot</span>
                                            </span>

                                        </a>
                                        <a href='/Play/Real/betongameshilo-Fastgames'
                                           target="_self"
                                           title="Hi Lo"
                                           class="tl_main_nav_item js_menu_links bg-tert  ">
                                            <span class="tl_main_nav_item-inner ">
                                                
                                                Hi Lo
                                                
                                            </span>

                                        </a>
                                        <a href='/Play/Real/betongames-Fastgames'
                                           target="_self"
                                           title="Keno"
                                           class="tl_main_nav_item js_menu_links bg-tert  ">
                                            <span class="tl_main_nav_item-inner ">
                                                
                                                Keno
                                                
                                            </span>

                                        </a>
                                        <a href='/Play/Real/KenoExpress-Fastgames'
                                           target="_self"
                                           title="Keno Express"
                                           class="tl_main_nav_item js_menu_links bg-tert  ">
                                            <span class="tl_main_nav_item-inner ">
                                                
                                                Keno Express
                                                
                                            </span>

                                        </a>
                                        <a href='/Play/Real/crash-Fastgames'
                                           target="_self"
                                           title="Crash"
                                           class="tl_main_nav_item js_menu_links bg-tert  ">
                                            <span class="tl_main_nav_item-inner ">
                                                
                                                Crash
                                                
                                            </span>

                                        </a>
                                        <a href='/Play/Real/betongamesrocket-Fastgames'
                                           target="_self"
                                           title="Roket"
                                           class="tl_main_nav_item js_menu_links bg-tert  ">
                                            <span class="tl_main_nav_item-inner ">
                                                
                                                Roket
                                                
                                            </span>

                                        </a>
                                        <a href='/Play/Real/Penalty-Fastgames'
                                           target="_self"
                                           title="Penaltı"
                                           class="tl_main_nav_item js_menu_links bg-tert  ">
                                            <span class="tl_main_nav_item-inner ">
                                                
                                                Penaltı
                                                
                                            </span>

                                        </a>
                                        <a href='/Play/Real/betongamessicbo-Fastgames'
                                           target="_self"
                                           title="Sic Bo"
                                           class="tl_main_nav_item js_menu_links bg-tert  ">
                                            <span class="tl_main_nav_item-inner ">
                                                
                                                Sic Bo
                                                
                                            </span>

                                        </a>
                                        <a href='/Play/Real/BlackJack-Fastgames'
                                           target="_self"
                                           title="BlackJack"
                                           class="tl_main_nav_item js_menu_links bg-tert  ">
                                            <span class="tl_main_nav_item-inner ">
                                                
                                                BlackJack
                                                <span class='dynamic_bagge hot'>Hot</span>
                                            </span>

                                        </a>
                            </div>
                        </div>
                        <div>
                            <a  target="_self" title="ZEPPELİN"
                               class="tl_main_nav_item js_menu_links openLogin ">
                                <span class="tl_main_nav_item-inner">
                                    
                                    ZEPPELİN
                                    
                                </span>
                            </a>
                        </div>
                        <div>
                            <a  target="_self" title="CANLI TV"
                               class="tl_main_nav_item js_menu_links openLogin ">
                                <span class="tl_main_nav_item-inner">
                                    
                                    CANLI TV
                                    
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href='/promotions' target="_self" title="PROMOSYONLAR"
                               class="tl_main_nav_item js_menu_links  ">
                                <span class="tl_main_nav_item-inner">
                                    
                                    PROMOSYONLAR
                                    
                                </span>
                            </a>
                        </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    setActiveClassToPrMenuItems('js_menu_links');

    $(document).on('click', '.js_open_dropdown', function (e) {
        e.stopPropagation();
        e.preventDefault();
        let dropDownCont = $(this).parents('.js_header_dropdown');
        if (dropDownCont.hasClass('open')) {
            dropDownCont.removeClass('open');
        } else {
            $('.js_header_dropdown').removeClass('open');
            dropDownCont.addClass('open');
        }
    });

    $(document).on('click', function () {
        $('.js_header_dropdown').removeClass('open');
    });
</script> 
                <script type="text/javascript">
                    /*responsive header*/
                    function respHdr() {
                        let navigationContainer = document.querySelector(".tl_header_bot_row_fix");
                        let navigation = document.querySelector(".tl_header_navigation");
                        let navigationsArray = Array.from(navigation.children);
                        let hiddenNavigationItemsArray = [];
                        let navItemsCount = navigationsArray.length;
                        let navItemsWidhs = createNavItemsWidthsArray();
                        function createNavItemsWidthsArray() {
                            let arr = [];
                            for (let i = 0; i < navigationsArray.length; i++) {
                                let w = navigationsArray[i].offsetWidth;
                                arr.push(w);
                            }
                            return arr;

                        }
                        let navigationContainerMoreBtn = document.createElement("div");
                        navigationContainerMoreBtn.className = "header_nav__more hdr_effect";
                        navigationContainerMoreBtn.id = "js_dy_hdr_more";
                        navigationContainerMoreBtn.innerHTML = "<span class='header_more_btn'> Daha Fazlası</span>";
                        let navigationContainerMore = document.createElement("div");
                        navigationContainerMore.className = "header_nav__more_content";
                        navigationContainerMore.id = "js_dy_hdr_more_content";
                        navigationContainerMoreBtn.appendChild(navigationContainerMore);
                        navigationContainer.appendChild(navigationContainerMoreBtn);
                        window.addEventListener("resize", rearrangeNavigationItems);
                        rearrangeNavigationItems();
                        function rearrangeNavigationItems() {
                            let hdrCont = document.getElementById('js_dy_hdr_cont');
                            let sportSw = document.getElementById('SportView');
                            let hdrMoreBtn = document.getElementById('js_dy_hdr_more');
                            let hdrMoreContent = document.getElementById('js_dy_hdr_more_content');
                            let hdrContLeft = hdrCont != null ? hdrCont.offsetLeft : 0;
                            let sportSwWidth = sportSw != null ? sportSw.offsetWidth : 0;
                            let hdrMoreBtnWidth = hdrMoreBtn != null ? hdrMoreBtn.offsetWidth : 0;
                            let hdrMoreContentWidth = hdrMoreContent != null ? hdrMoreContent.offsetWidth : 0;
                            let moreSize = hdrMoreBtnWidth > hdrMoreContentWidth ? hdrMoreBtnWidth : hdrMoreContentWidth;
                            let winWid = window.innerWidth - (hdrContLeft * 2) - sportSwWidth - moreSize - 15;
                            let ind = navItemsCount;
                            let visWidth = 0;
                            let allVisible = true;
                            for (let i = 0; i < navItemsWidhs.length; i++) {
                                visWidth += navItemsWidhs[i];
                                if (visWidth <= winWid && visWidth + navItemsWidhs[i + 1] >= winWid) {
                                    ind = i + 1;
                                    allVisible = false;
                                    break;
                                }
                            }
                            navigationContainerMoreBtn.style.visibility = allVisible ? "hidden" : "visible";
                            restoreNavigationArray();
                            moveToHiddenNavigationItemsArray(ind);
                            appendNavigationItems();
                            if ($(".header_nav__more .tl_main_nav_item-active").length > 0) {
                                $(".header_more_btn").addClass("text-primary");
                            } else {
                                $(".header_more_btn").removeClass("text-primary");
                            }

                            let hdrMoreContentAfterAppendWidth = document.getElementById('js_dy_hdr_more_content') != null ? document.getElementById('js_dy_hdr_more_content').offsetWidth : 0;
                            if (hdrMoreContentAfterAppendWidth != hdrMoreContentWidth) {
                                rearrangeNavigationItems();
                            }
                        }
                        function restoreNavigationArray() {

                            for (let i = 0; i < hiddenNavigationItemsArray.length; i++) {

                                hiddenNavigationItemsArray[i].classList.remove('bg-tert');
                                navigationsArray.push(hiddenNavigationItemsArray[i]);
                            }
                            hiddenNavigationItemsArray = [];
                        }
                        function moveToHiddenNavigationItemsArray(count) {
                            let _count = count;
                            let itemsToMove;
                            itemsToMove = navigationsArray.splice(_count);
                            for (let i = 0; i < itemsToMove.length; i++) {
                                hiddenNavigationItemsArray.push(itemsToMove[i]);
                            }
                        }
                        function appendNavigationItems() {
                            for (let i = 0; i < navigationsArray.length; i++) {
                                navigation.appendChild(navigationsArray[i]);
                            }
                            for (let i = 0; i < hiddenNavigationItemsArray.length; i++) {
                                hiddenNavigationItemsArray[i].classList.add('bg-tert');
                                navigationContainerMore.appendChild(hiddenNavigationItemsArray[i]);
                            }
                        }
                    };
                    setTimeout(function () {
                        respHdr();
                        $('#js_dy_hdr').removeClass('hdr_effect');
                        $('#js_dy_hdr_more').removeClass('hdr_effect');
                    }, 300)

                </script>
                

        


        <div id="js_billboard_banner_cont_477" class="dynamicBanners swiper banners_billboard casino_backgr__slider_item ">
                <div class="js_billboard_banner__arrow_cont banners_billboard_arrow__wrapper flex">
                    <div id="js_billboard_banner_prev_477" class="banners_billboard_arrow__prev banners_billboard_arrows cas_nav_prev flex jc alCen slick-arrow">
                        <i class="dynamic_icon">&#58210</i>
                    </div>
                    <div id="js_billboard_banner_count_477" class="banners_billboard_arrow__count top_winners__slider_number flex jc gx-1 alCen"></div>
                    <div id="js_billboard_banner_next_477" class="banners_billboard_arrow__next banners_billboard_arrows cas_nav_next flex jc alCen slick-arrow">
                        <i class="dynamic_icon">&#58211</i>
                    </div>
                </div>
            <div class="banners_billboard_slider swiper-wrapper left_200">

            <a class="dynamicBanners_item swiper-slide" href="/Promotions" target="_blank">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/slides/hafta sonu yeni pc.jpg" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/Promotions" target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/2023SLİDER/sliderFS.png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="." target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/y&#252;ksek kazanc/slider574k.png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/Promotions" target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/2023SLİDER/slider300İYB.png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/Promotions" target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/2023SLİDER/20YBslider.png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="." target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/100tldeneme/slider100tldeneme.png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/rules/tr/16082/26937/PROMOSYONLAR/KAYIPLARINIZA-150-FREESPİN/" target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/&#214;ZEL ETKİNLİK/slider150freespin.png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/Promotions" target="_blank">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/slides/her g&#252;n 50 slot pc.jpg" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/rules/tr/16082/26983/PROMOSYONLAR/SPOR-TURNUVASI-AYLIK-&#214;D&#220;L-100.000₺/" target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/SLİDER SPOR/sliderSPOR.png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="." target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/PP110K/sliderFOTBALLDİCE.png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="." target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/4609SMS/slider4609.png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/rules/tr/16082/26435/PROMOSYONLAR/PAZARTESİ-Ve-&#199;ARŞAMBA-G&#220;NLERİNE-&#214;ZEL-~100-SLOT-YATIRIM-BONUSU/" target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/pzt/webslider100pzt.png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/tr/Lobby/Casino/Main" target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/netent/EGTslider.png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/Promotions" target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/YATIRIM Y&#214;NTEMLERİ/movenpay10web.jpg" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="." target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/YATIRIM Y&#214;NTEMLERİ/banka50web.jpg" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/Promotions" target="_blank">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/slides/haftalık yeni oc.jpg" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/Promotions" target="_blank">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/slides/30 anlık dsc yeni.jpg" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="." target="_blank">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/slides/hızlıca paralar pc.jpg" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>

            </div>
            <script type="text/javascript">
                (async () => {
                    let billboardSwiper = new Swiper('#js_billboard_banner_cont_' + '477', {
                        loop: true,
                        slidesPerView: 1,
                        preloadImages: false,
                        pagination: {
                            el: '#js_billboard_banner_count_' + '477',
                            type: "fraction",
                        },
                        navigation: {
                            nextEl: '#js_billboard_banner_next_' + '477',
                            prevEl: '#js_billboard_banner_prev_' + '477',
                        },
                        autoplay: {
                            delay: 5000,
                            disableOnInteraction: false
                        },
                        lazy: {
                            loadPrevNext: true,
                            loadPrevNextAmount: 2
                        },
                        on: {
                            transitionEnd: function (swiper) {
                                playAndMuteBannerVideo(swiper.$wrapperEl);
                            },
                            beforeInit: function (swiper) {
                                if (swiper.wrapperEl.getElementsByClassName('swiper-slide').length <= 1) {
                                    swiper.params.loop = false;
                                }
                            }
                        }
                    });
                    addToVideoBannersObserver('js_billboard_banner_cont_' + '477', true);
                })();
            </script>
        </div>


<div class="home-page__content">


<div class="tl_container">
    <div class="name_vidget">Jackpot Sayacı</div>
    <div class="top_jackpots__container flex">
        <a class="top_jackpots__anim" href="/tr/Lobby/Casino/Main/Slots/Amusnetinteractiveegt">
            <div class="top_jackpots__block flex jc alCen flexcol">
                <div class="top_jackpots__name"> <img src="https://cdn-plat.apidigi.com/plat/prd/Img/icons/redesign/EGT.svg" alt="egt logo" /></div>
                <div class="flex">
                    <span class="top_jackpot_icon ic_01"></span>
                    <div class="top_jackpots__value" id="egt_first"></div>
                    <span class="top_jackpots__crns TRY"></span>
                </div>
            </div>
        </a>
        <a class="top_jackpots__anim" href="/tr/Lobby/Casino/Main/Slots/Amusnetinteractiveegt">
            <div class="top_jackpots__block flex jc alCen flexcol">
                <div class="top_jackpots__name"><img src="https://cdn-plat.apidigi.com/plat/prd/Img/icons/redesign/EGT.svg" alt="egt logo" /></div>
                <div class="flex">
                    <span class="top_jackpot_icon ic_02"></span>
                    <div class="top_jackpots__value" id="egt_second"></div>
                    <span class="top_jackpots__crns TRY"></span>
                </div>
            </div>
        </a>
        <a class="top_jackpots__anim" href="/tr/Lobby/Casino/Main/Slots/Amusnetinteractiveegt">
            <div class="top_jackpots__block flex jc alCen flexcol">
                <div class="top_jackpots__name"><img src="https://cdn-plat.apidigi.com/plat/prd/Img/icons/redesign/EGT.svg" alt="egt logo" /></div>
                <div class="flex">
                    <span class="top_jackpot_icon ic_03"></span>
                    <div class="top_jackpots__value" id="egt_third"></div>
                    <span class="top_jackpots__crns TRY"></span>
                </div>
            </div>
        </a>
        <a class="top_jackpots__anim" href="/tr/Lobby/Casino/Main/Slots/Amusnetinteractiveegt">
            <div class="top_jackpots__block flex jc alCen flexcol">
                <div class="top_jackpots__name"><img src="https://cdn-plat.apidigi.com/plat/prd/Img/icons/redesign/EGT.svg" alt="egt logo" /></div>
                <div class="flex">
                    <span class="top_jackpot_icon ic_04"></span>
                    <div class="top_jackpots__value" id="egt_fourth"></div>
                    <span class="top_jackpots__crns TRY"></span>
                </div>
            </div>
        </a>
    </div>
    <div class="tl_landing_nav_big_wrapper flex_wrap_breakpoint" id="">
        <a href="/Sport" class="tl_landing_nav_big">
            <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/Sports.png" />
            <p class="nav_title">Spor</p>
        </a>
        <a href="/Sport/Live" class=" tl_landing_nav_big">
            <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/Live.png" />
            <p class="nav_title">Canlı Bahis</p>
        </a>
        <a href="/tr/Lobby/Casino/Main" class=" tl_landing_nav_big">
            <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/cs_image.png" />
            <p class="nav_title">SLOT</p>
        </a>
        <a href="/tr/Lobby/LiveCasino/Main" class=" tl_landing_nav_big">
            <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/live_cs_image.png" />
            <p class="nav_title">Canlı Casino</p>
        </a>
        <a href="/tr/Lobby/Tvgames/Main" class=" tl_landing_nav_big">
            <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/Tv_Games.png" />
            <p class="nav_title">TV Oyunları</p>
        </a>
            <a href="/Login/Login" class=" tl_landing_nav_big openLogin">
                <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/Zeppelin.png" />
                <p class="nav_title">Zeppelin</p>
            </a>
        <a href="/Play/Real/crash-Fastgames" class=" tl_landing_nav_big">
            <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/Crash.png" />
            <p class="nav_title">Crash</p>
        </a>
    </div>

            <div id="js_rectangleAd_867" class="dynamicBanners banners_rectangleAd">

            <a class="dynamicBanners_item swiper-slide" href="." target="_blank">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/slides/f-01.jpg" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="https://rebrand.ly/canlitvvv" target="_blank">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/slides/f-02.jpg" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="." target="_blank">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/slides/f-03.jpg" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>

            </div>
            <script type="text/javascript">
                lazyLoadImages('js_rectangleAd_867');
                addToVideoBannersObserver('js_rectangleAd_867');
            </script>




    <div class="matches_block full_width">
        <div id="matchesBlock"></div>
    </div>
            <div class="banners_thumbnail9__wrapper">
                    <div class="flex alCen spcbtw">
                        <h2 class="name_vidget">EN &#199;OK OYNANAN SLOT OYUNLARI</h2>
                    </div>
                <div id="js_thumbnail9_868" class="dynamicBanners banners_thumbnail9">

            <a class="dynamicBanners_item swiper-slide" href="/Play/Real/40-Burning-Hot-EGT-Casino" target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/OYUNLARMİNİ/40BURNİNGHOT.png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/Play/Real/Flaming-Hot-EGT-Casino" target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/OYUNLARMİNİ/7FLAMİNGHOT.png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/Lobby/Casino/Main/Slots/Amusnetinteractiveegt" target="_self">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/OYUNLARMİNİ/EGYPSKY.png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/en/games/playreal/Hand-of-Midas-PragmaticPlay" target="_blank">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/516_302_hand_of_midas.png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="en/games/playreal/John-Hunter-and-the-Book-of-Tut-PragmaticPlay" target="_blank">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/book of tut.gif" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/en/games/playreal/The-Wild-Machine-PragmaticPlay" target="_blank">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/microsoftteams-image (2).png" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/tr/Play/Real/Sun-of-Egypt-Booongo-Casino" target="_blank">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/SunofEgypt.jpg" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="tr/Play/Real/Gates-of-Olympus-PragmaticPlay-Casino" target="_blank">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/GatesofOlympus.jpg" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>
            <a class="dynamicBanners_item swiper-slide" href="/en/games/playreal/Candy-Tower-Habanero" target="_blank">
                <img class="dynamicBanners_img swiper-lazy" data-src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/candytower.jpg" />
                <div class="carousel_caption dynamicBanners_caption">
                    
                </div>
            </a>

                </div>
            </div>
            <script type="text/javascript">
                lazyLoadImages('js_thumbnail9_868');
                addToVideoBannersObserver('js_thumbnail9_868');
            </script>



    <div class="d-flex justify-content-center my-2">
        <button class="toTop tl_btn"><i class="tl_ico tl_ico-arrow-top"></i></button>
    </div>
</div>

<script src="/Scripts/jackpotSlider.js"></script>
<script src="//sport.betwoon415.com/js/partner/bootstrapper.min.js?v=3"></script>
<script type="text/javascript">
    (function bootTopMatches() {
        var params = {
            defaultLanguage: 'tr',
            target: '#matchesBlock',
            server: '//sport.betwoon415.com/',
            parent:['betwoon415.com'],
            userId: '',
        };
        Bootstrapper.boot(params, {
            name: 'TopMatches'
        }).then(addListeners);
        function addListeners(topMatches) {
            topMatches.addEventListener('navigateToEvent', function (messageEvent) {
                location.href = "http" + "://" + "betwoon415.com" + "/Sport/UpcomingDetails/" + messageEvent.data.Id;
            });
            topMatches.addEventListener('navigateToChampionship', function (messageEvent) {
                location.href = "http" + "://" + "betwoon415.com" + "/Sport/Upcoming/" + messageEvent.data.Id;
            });
        }
    })();
</script>
<script type="text/javascript">
    var number1 = parseInt("66");
    var number2 = parseInt("514");
    var number3 = parseInt("18010");
    var number4 = parseInt("81047");
    var digitsAfterDot = parseInt("0");
    var stepCount = parseInt("0");
    var firstJack, secondJack, thirdJack, fourthJack = false;
    var slide1, slide2, slide3, slide4;
    $(document).ready(function () {
        slide1 = new FlipJackpotNumbers({
            node: document.querySelector("#egt_first"),
            from: number1 == 0 ? 0 : number1 - stepCount,
            seperateOnly: digitsAfterDot,
        });
        slide2 = new FlipJackpotNumbers({
            node: document.querySelector("#egt_second"),
            from: number2 == 0 ? 0 : number2 - stepCount,
            seperateOnly: digitsAfterDot,
        });
        slide3 = new FlipJackpotNumbers({
            node: document.querySelector("#egt_third"),
            from: number3 == 0 ? 0 : number3 - stepCount,
            seperateOnly: digitsAfterDot,
        });
        slide4 = new FlipJackpotNumbers({
            node: document.querySelector("#egt_fourth"),
            from: number4 == 0 ? 0 : number4 - stepCount,
            seperateOnly: digitsAfterDot,
        });
        var data = {
            currentLevelI: number1,
            currentLevelII: number2,
            currentLevelIII: number3,
            currentLevelIV: number4,
        }
        flip(data);
    });
     setInterval(() => {
         $.ajax({
            url: "/tr/Common/GetJack",
            type: "POST",
            datatype: "json",
            success: function (result) {
                flip(result);
            }
        })
     }, 30050);

    function flip(result) {
        if (number1 > result.currentLevelI) {
            firstJack = true;
            slide1.node.classList.add('blink');
        } else {
            if (firstJack) {
                slide1.destroy();
                slide1 = new FlipJackpotNumbers({
                    node: document.querySelector("#egt_first"),
                    from: number1,
                    seperateOnly: digitsAfterDot,
                });
                firstJack = false;
            }
            if ((number1 - stepCount).toString().length < result.currentLevelI.toString().length) {
                document.getElementById('egt_first').children[0].classList.remove('hide');
            }
            slide1.flipTo({
                to: result.currentLevelI,
                direct: false
            });
        }
        if (number2 > result.currentLevelII) {
            secondJack = true;
            slide2.node.classList.add('blink');
        } else {
            if (secondJack) {
                secondJack = false;
                slide2.destroy();
                slide2 = new FlipJackpotNumbers({
                    node: document.querySelector("#egt_second"),
                    from: number2,
                    seperateOnly: digitsAfterDot,
                });
            }

            if ((number2 - stepCount).toString().length < result.currentLevelII.toString().length) {
                document.getElementById('egt_second').children[0].classList.remove('hide');
            }
            slide2.flipTo({
                to: result.currentLevelII,
                direct: false
            });
        }
        if (number3 > result.currentLevelIII) {
            thirdJack = true;
            slide3.node.classList.add('blink');
        } else {
            if (thirdJack) {
                thirdJack = false;
                slide3.destroy();
                slide3 = new FlipJackpotNumbers({
                    node: document.querySelector("#egt_third"),
                    from: number3,
                    seperateOnly: digitsAfterDot,
                });
            }
            if ((number3 - stepCount).toString().length < result.currentLevelII.toString().length) {
                document.getElementById('egt_third').children[0].classList.remove('hide');
            }
            slide3.flipTo({
                to: result.currentLevelIII,
                direct: false
            });
        }

        if (number4 > result.currentLevelIV) {
            fourthJack = true;
            slide4.node.classList.add('blink');
        } else {
            if (fourthJack) {
                fourthJack = false;
                slide4.destroy();
                slide4 = new FlipJackpotNumbers({
                    node: document.querySelector("#egt_fourth"),
                    from: number4,
                    seperateOnly: digitsAfterDot,
                });
            }
            if ((number4 - stepCount).toString().length < result.currentLevelIV.toString().length) {
                document.getElementById('egt_fourth').children[0].classList.remove('hide');
            }
            slide4.flipTo({
                to: result.currentLevelIV,
                direct: false
            });
        }

        number1 = result.currentLevelI;
        number2 = result.currentLevelII;
        number3 = result.currentLevelIII;
        number4 = result.currentLevelIV;
    }

    $('.tl_landing_nav_big').on('mouseenter', function () {
        let newlinkItems = $(this).find($('img')).attr('src').split('/');
        let newlink = newlinkItems[newlinkItems.length - 1].slice(0, -3);
        $(this).find($('img')).attr('src', 'https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/bannersGif/' + newlink + 'gif');
    });
    $('.tl_landing_nav_big').on('mouseleave', function () {
        let newlinkItems = $(this).find($('img')).attr('src').split('/');
        let newlink = newlinkItems[newlinkItems.length - 1].slice(0, -3);
        $(this).find($('img')).attr('src', 'https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/banners/' + newlink + 'png');
    });

</script>
</div>



<style>
    .social_icons_footer a {
        background: url(https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/footer_social_icons.png) no-repeat;
    }
    .whatsapp_top {
        background-image: url(https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/wp.png);
    }
    .telegram_top {
        background-image: url(https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/telegram_top.svg);
    }

    .twitter .social_icon:before {
        background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/twitter.svg');
    }

    .instagram .social_icon:before {
        background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/instagram.svg');
    }

    .pinterest .social_icon:before {
        background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/pinterest.svg');
    }

    .facebook .social_icon:before {
        background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/facebook.svg');
    }

    .telegram .social_icon:before {
        background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/telegram.svg');
    }

    .whatsapp .social_icon:before {
        background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/whatsapp.svg');
    }

    .promo_bg_image {
        background-image: url(https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/bg_promotions.png);
    }
</style>
<!--    FOOTER CONTAINER-->



<div>
    <a href="https://rebrand.ly/betwoonwp" target="_blank" rel="noopener" class="whatsapp_top d-flex align-items-center justify-content-center"></a>
    <a href="https://rebrand.ly/telegrammmmms" target="_blank" rel="noopener" class="telegram_top d-flex align-items-center justify-content-center"></a>

    <div id="rwCustomContent">

        <div id="rwQuickActions" class="quick-actions-nav ">
            <button id="rwToggleQuickActionsBtn" class="">
                <span><img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/live-chat-img/icon-quick-actions-plus.svg?1"></span>
            </button>

            <div id="rwQuickActionsMenuNew">

                <div id="rwQuickActionsMenuWrapperNew">

                    <a href="javascript:void(0)" id="btcWithdraw">
                        <span><p>EVRAKSIZ,</p><p>BELGESİZ</p> <i>7/24</i> <p>ANINDA</p><p>ÇEKİM</p> <p>İMKANI!</p></span>
                    </a>

                    <a href="https://rebrand.ly/betwoonmobil" target="_blank">
                        <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/live-chat-img/icon-app.svg?1">
                        <span>betwoon app</span>
                    </a>
                    <a href="https://rebrand.ly/carkkk" target="_blank">
                        <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/live-chat-img/icon-cark.svg">
                        <span>çarkıfelek</span>
                    </a>

                    <a href="https://rebrand.ly/betwoonortalkkk" target="_blank">
                        <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/live-chat-img/icon-bonus-request-2.svg?1">
                        <span>bayilik anlaşması</span>
                    </a>

                    <a href="https://rebrand.ly/beniaraaaaa" target="_blank">
                        <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/live-chat-img/icon-call.svg?1">
                        <span>beni ara</span>
                    </a>

                    <a href="https://rebrand.ly/Bonustalepp" target="_blank">
                        <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/live-chat-img/icon-tournaments.svg?1">
                        <span>bonus talep</span>
                    </a>

                    <a href="https://rebrand.ly/betwoonyatirim" class="hide-on-english" target="_blank">
                        <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/live-chat-img/money.svg?1">
                        <span>nasıl para yatırılır</span>
                    </a>

                    <a href="https://rebrand.ly/telegrammmmms" target="_blank">
                        <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/live-chat-img/icon-telegram.svg?2">
                        <span>telegram</span>
                    </a>

                    <a href="https://rebrand.ly/betwoonwp" target="_blank">
                        <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/live-chat-img/whatsapp.svg">
                        <span>whatsapp</span>
                    </a>

                    <a href="https://rebrand.ly/canlitvvv" target="_blank">
                        <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/live-chat-img/icon-tv.svg?2">
                        <span>canlı tv</span>
                    </a>
                </div>

            </div>

        </div>

    </div>

</div>



<div class="tl_footer" id="js_footer">
    <div class="tl_footer_container">
        <div class="tl_footer_links d-flex justify-content-between flex">
            <div class="tl_footer_links_row">
                <div class="tl_footer_links_heading">Hakkımızda</div>
                <a class="tl_footer_link" href="/Rules/tr/15733">Kullanım Şartları</a>
                <a class="tl_footer_link" href="/Rules/tr/15735">Sorumlu Oyun</a>
                <a class="tl_footer_link" href="/Rules/tr/15737">Kendini dışlama</a>
                <a class="tl_footer_link" href="/Rules/tr/15739">Tartışmalı karar</a>
                <a class="tl_footer_link" href="/Rules/tr/15741">Kara Para Aklamayı &#214;nleme</a>
                <a class="tl_footer_link" href="/Rules/tr/15743">Adalet ve RNG Test Y&#246;ntemleri</a>
                <a class="tl_footer_link" href="/Rules/tr/15952">KYC Politikaları</a>
                <a class="tl_footer_link" href="/Rules/tr/15954">Gizlilik Politikası</a>
                <a class="tl_footer_link" href="/Rules/tr/15956">Hesaplar, &#214;demeler ve Bonuslar</a>
            </div>
            <div class="tl_footer_links_row">
                <div class="tl_footer_links_heading">Hızlı Linkler</div>
                <a class="tl_footer_link" href="/tr/Lobby/Casino/Main">Slot Oyunları</a>
                <a class="tl_footer_link" href="/tr/Lobby/Livecasino/Main">Canlı Casino</a>
                <a class="tl_footer_link" href="/Rules/tr">Para Yatırma</a>
                <a class="tl_footer_link" href="/Rules/tr">Para &#199;ekme</a>
                <a class="tl_footer_link" href="/GetSpecificGames?url=zeppelin-betsolutions">Zeppelin</a>
            </div>
            <div class="tl_footer_links_row">
                <div class="tl_footer_links_heading">BAHİSLER</div>
                <a class="tl_footer_link" href="/Sport/Live">Canlı Bahis</a>
                <a class="tl_footer_link" href="/Sport">Futbol Bahisleri</a>
                <a class="tl_footer_link" href="/Sport">Basketbol Bahisleri</a>
                <a class="tl_footer_link" href="/Sport">Tenis Bahisleri</a>
                <a class="tl_footer_link" href="/Sport">Beyzbol Bahisleri</a>
                <a class="tl_footer_link" href="/Sport">Formula 1</a>
            </div>
            <div class="tl_footer_links_row">
                <div class="tl_footer_links_heading">Futbol Bahisleri</div>
                <a class="tl_footer_link" href="/Sport">UEFA Şampiyonlar Ligi</a>
                <a class="tl_footer_link" href="/Sport">UEFA Avrupa Ligi</a>
                <a class="tl_footer_link" href="/Sport">T&#252;rkiye S&#252;per Ligi</a>
                <a class="tl_footer_link" href="/Sport">İspanya La Liga</a>
                <a class="tl_footer_link" href="/Sport">İngiltere Premier Ligi</a>
                <a class="tl_footer_link" href="/Sport">Almanya Bundesliga</a>
            </div>
            <div class="tl_footer_links_row">
                <div class="tl_footer_links_heading">Promosyonlar</div>
                <a class="tl_footer_link" href="/Promotions">%300 İLK YATIRIM!</a>
                <a class="tl_footer_link" href="/Promotions">%35 DİSCOUNT!</a>
                <a class="tl_footer_link" href="/Promotions">%20 YATIRIM %10 KAYIP ÇİFTE ŞANS!</a>
                <a class="tl_footer_link" href="/Promotions">%50 SLOT BONUSU!</a>
                <a class="tl_footer_link" href="/Promotions">30 TL DENEME BONUSU!</a>
                <a class="tl_footer_link" href="/Promotions">HAFTALIK TOPLAM KAYIP BONUSU!</a>
            </div>
        </div>
        <div class="toMobile_block">
            <a class="toMobile tl_btn" href="/Mobile/IsMobile?IsMobile=true"><i class="tf_mobile_icon"></i><span>MOBIL S&#220;R&#220;M</span></a>
        </div>

        <img class="footer_image" src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/AOT.png" />
        <div class="footer_info flex jc alCen flex-wrap">
            <div class="footer_logos">
                <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/footer_logos/1.png" alt="" />
                <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/footer_logos/2.png" alt="" />
                <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/footer_logos/3.png" alt="" />
                <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/footer_logos/4.png" alt="" />
            </div>
            <div class="footer_text">
                Destek: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c6a2a3b5b2a3ad86a4a3b2b1a9a9a8f5f0f3e8a5a9ab">[email&#160;protected]</a> <br /> Reklam ve Affiliate <br /> Anlaşmaları: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b3c1d6d8dfd2def3d1d6c7c4dcdcdd8085869dd0dcde">[email&#160;protected]</a>
            </div>
            <div class="plus18_custom">+18</div>
            <div class="footer_text">
                Kumar Alışkanlık yapabilir <br />
                Kumar Oynarken <br />
                Lütfen Sorumlu davranınız
            </div>
            <div class="footer_text">
                <a href="https://www.dmca.com/Protection/Status.aspx?ID=4fe155cd-2c7d-4450-a912-28b504bcb9ce&refurl=https://betwoon365.com/" title="DMCA.com Protection Status" class="dmca-badge"> <img src="https://images.dmca.com/Badges/_dmca_premi_badge_1.png?ID=4fe155cd-2c7d-4450-a912-28b504bcb9ce" alt="DMCA.com Protection Status" /></a>
                <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
            </div>
            <div class="footer_text">
                <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/FFE.png" alt="ffe" />
            </div>
            <div class="flex rating_functionality">
                <iframe src="https://betwoonoylama.com/iframe.php"></iframe>
            </div>
        </div>

        <p class="footer_bottom_text mb-2">
            Betwoon365.com is operated by GSR Technology N.V. registered under No. 155130 at, Kaya Richard J. Beaujon Z/N Landhuis Joonchi II, Cura&#231;ao. This website is licensed and regulated by Cura&#231;ao eGaming (Cura&#231;ao license No. 1668 JAZ issued by Cura&#231;ao eGaming).
        </p>

        <p class="copy">BETWOON &copy; 2023 T&#252;m hakları saklıdır.</p>

        <div class="social_title">SOSYAL MEDYA HESAPLARIMIZ</div>
        <div class="social_icons_footer frow flex jc">
            <a class="yandex" href="/cdn-cgi/l/email-protection#d1b5b4a2a5b4ba91b3b4a5a6bebebfe2e7e4ffb2bebc" target="_blank" rel="noopener"></a>
            <a class="facebook" href="https://rebrand.ly/betwoonface" target="_blank" rel="noopener"></a>
            <a class="pinterest" href="https://rebrand.ly/betwoonpintrest" target="_blank" rel="noopener"></a>
            <a class="twitter" href="https://rebrand.ly/betwoontwitter" target="_blank" rel="noopener"></a>
            <a class="insta" href="https://rebrand.ly/betwooninstagram" target="_blank" rel="noopener"></a>
            <a class="whatsapp" href="https://rebrand.ly/betwoonwp" target="_blank" rel="noopener"></a>
            <a class="youtube" href="https://rebrand.ly/betwoonyoutube" target="_blank" rel="noopener"></a>
        </div>

        <p class="footer_bottom_text mb-2">Betwoon ile ilgili soru ve görüşleriniz için canlı destek hattımızdan bizlere ulaşabilirsiniz. Müşteri hizmetleri olarak size her türlü konuda yardımcı olmaktan sevinç duyarız. <br /> Tüm bilgileriniz için üçüncü şahısların eline geçmesi tehlikesine karşı özel bir güvenlik kriptolojisi kullanılmaktadır. Günlük yüzlerce canlı bahis ve gerçek canlı casino oyunları ile herkese bol şans dileriz.</p>
        <div class="text-center">
            <a href="https://verification.curacao-egaming.com/validateview.aspx?domain=betwoon365.com" target="_blank">
                <img src="https://verification.curacao-egaming.com/validate.ashx?domain=betwoon365.com" alt="" width="100" />
            </a>
        </div>
    </div>
</div>
    <div class="social_icons_fixed">
        <a class="instagram" href="https://rebrand.ly/betwooninstagram" target="_blank" rel="noopener">
            <span class="social_text">Instagram</span>
            <span class="social_icon"></span>
        </a>
        <a class="facebook" href="https://rebrand.ly/betwoonface" target="_blank" rel="noopener">
            <span class="social_text">Facebook</span>
            <span class="social_icon"></span>
        </a>
        <a class="twitter" href="https://rebrand.ly/betwoontwitter" target="_blank" rel="noopener">
            <span class="social_text">Twitter</span>
            <span class="social_icon"></span>
        </a>
        <a class="pinterest" href="https://rebrand.ly/betwoonpintrest" target="_blank" rel="noopener">
            <span class="social_text">Pinterest</span>
            <span class="social_icon"></span>
        </a>
    </div>
    <div style="display:none;">
        <a href="https://betwoon262.com/" title="betwoon">betwoon</a> ,
        <a href="http://betwoongiris.com/" title="betwoon giriş">betwoon giriş</a> ,
        <a href="https://betwoon268.com/" title="betwoon">betwoon</a>
    </div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
    var logdin = 0 + "";
    $(".new_pay").click(function () {
        if (logdin > 0) {
            $(".tl_deposit_button").trigger("click");

        } else {
            $(".tl_login_button").trigger("click");

        }
    });

    $(document).on('click', '#rwToggleQuickActionsBtn', function (){
    $(this).toggleClass('opened');
    $('#rwQuickActions').toggleClass('opened');
    $('#rwSupportOptions').removeClass('opened');
    if($('#rwQuickActions').hasClass('opened')){
        $('#rwQuickActionsOverlay').addClass('opened');
    }else{
        $('#rwQuickActionsOverlay').removeClass('opened');
    }
});

$(document).on('click', '#rwQuickActionsOverlay, #rwQuickActionsWindowCloseBtn', function (){
    $('#rwQuickActions').removeClass('opened');
    $('#rwQuickActionsOverlay').removeClass('opened');
    $('#rwQuickActionsWindow').removeClass('opened');
    if (rw.getDeviceType() !== 'd') {
        $('#rwToggleQuickActionsBtn, #lc-c').removeClass('opened');
    }
});

</script>

    </div>

<div id="comm100-button-5194f22f-9b4a-4093-b859-bbed55a391a2"></div>
<script type="text/javascript">
    var Comm100API = Comm100API || {}; (function (t) {
        function e(e) {
            var a = document.createElement("script"),
                c = document.getElementsByTagName("script")[0];
            a.type = "text/javascript",
                a.async = !0,
                a.src = e + t.site_id,
                c.parentNode.insertBefore(a, c)
        }
        t.chat_buttons = t.chat_buttons || [], t.chat_buttons.push(

            {
                code_plan: "5194f22f-9b4a-4093-b859-bbed55a391a2", div_id: "comm100-button-5194f22f-9b4a-4093-b859-bbed55a391a2"
            }
        ),
            t.site_id = 90000118,
            t.main_code_plan = "5194f22f-9b4a-4093-b859-bbed55a391a2",
            e("https://vue.comm100.com/livechat.ashx?siteId="), setTimeout(function () {
                t.loaded || e("https://standby.comm100vue.com/livechat.ashx?siteId=")
            }
                , 5e3)
    })(Comm100API || {})
</script>

        <script>
            window.addEventListener('scroll', detachHeader, false);

            function detachHeader(evt) {
                var defScroll = 0;

                if (evt.currentTarget.scrollY > 54) {
                    header_fix.classList.add('fixed_head');
                } else {
                    header_fix.classList.remove('fixed_head');
                }
            }
        </script>



            <div id="userPopup" class="tl_popup_container user_popup dis_none">
    </div>

    </body>
</html>

<div id="verification_popup"></div>

<div id="InffInfoPopUpdialog"></div>
<script type="text/javascript">
    var gameLunch = false;
    var isGameHistory = false;
    $(document).on("click", ".game__link_real_cont , .game__link_real_cont_from_game_history", function (e) {
                if ('False' == 'True' && 'False' == 'True' && ('False' == 'False' || 'False' == 'False')) {
                    CheckClientVerificationInfo();
                    return false
                } else if ('False' == 'True') {
                    return insFoundsCheck(e);
                }
            });
</script>

<script>

    if ('false' == 'true') {
        function RefreshToken() {
            $.ajax({
                url: '/Account/RefreshToken',
                type: 'post',
                dataType: 'json',
                success: function (data) {
                }
            });
        }

        setInterval(function () {
            RefreshToken();
        }, 300000);
    }

</script>

<script>
    window.parent.postMessage({ cssText: '', sender: 'updateCss' }, '*');

    window.addEventListener('message', (event) => {

        if (event.data.sender !== 'skinner') return;

        var cssText = event.data.cssText;

        if (!cssText) return console.log('no css text found');

        createOrUpdateStyle(cssText);
    });

    var skinnerGeneratedStyleID = 'skinner-generated-style';

    function createOrUpdateStyle(cssText) {
        var existingStyle = document.getElementById(skinnerGeneratedStyleID);

        if (existingStyle) return existingStyle.innerHTML = cssText;

        var options = { innerHTML: cssText, id: skinnerGeneratedStyleID };

        var style = createStyle(options);

        document.head.appendChild(style);
    }

    function createStyle(options) {
        options = options || {};
        var style = document.createElement('style');
        Object.assign(style, options);
        return style;
    }


</script>

    <script>
        setCookie('_userLoggedIn', null, '-1');
    </script>

<style>
    :root {
        --cdn-logo_png: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/logo.png');
        --cdn-logoSm_png: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/logoSm.png');
        --cdn-logo_svg: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/logo.svg');
        --cdn-logoSm_svg: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/logoSm.svg');
        --cdn-logo_gif: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/logoGif.gif');
        --cdn-footer_sprite: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1131/footer_sprite.png');
        --cdn-newBadge_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/new.svg');
        --cdn-newBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_new.svg');
        --cdn-hotBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_hot.svg');
        --cdn-topBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_top.svg');
        --cdn-jackpotBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_jackpot.svg');
        --cdn-jackpot_icons: url('https://cdn-plat.apidigi.com/plat/prd/Img/icons/redesign/egt_jackpot_icons.png');
    }
</style>
