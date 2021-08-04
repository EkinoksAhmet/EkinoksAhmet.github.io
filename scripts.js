$(".hakkinda_acilan_bolum").hide();
$(".katagori_acilan_bolum").hide()
$(".iletisim_acilan_bolum").hide()
$(".ayarlar_acilan_bolum").hide()
$(".katogoriler_dersler_acilan_bolum").hide();
$(".katogoriler_sinavlar_acilan_bolum").hide();

$("#close_mainmenu_button").click(function(){
    $("#up_menu_mother_table, .icon_mothertable").slideToggle();
});

$("#mothertable_icon_about").click(function(){
    $(".hakkinda_acilan_bolum").slideToggle()
    $(".katagori_acilan_bolum").slideUp()
    $(".iletisim_acilan_bolum").slideUp()
    $(".ayarlar_acilan_bolum").slideUp()
    $(".katogoriler_dersler_acilan_bolum").slideUp();
    $(".katogoriler_sinavlar_acilan_bolum").slideUp();
});

$("#mothertable_icon_katagori").click(function(){
    $(".hakkinda_acilan_bolum").slideUp()
    $(".katagori_acilan_bolum").slideToggle()
    $(".iletisim_acilan_bolum").slideUp()
    $(".ayarlar_acilan_bolum").slideUp()
    $(".katogoriler_dersler_acilan_bolum").slideUp();
    $(".katogoriler_sinavlar_acilan_bolum").slideUp();
});

$("#mothertable_icon_conatct").click(function(){
    $(".hakkinda_acilan_bolum").slideUp()
    $(".katagori_acilan_bolum").slideUp()
    $(".iletisim_acilan_bolum").slideToggle()
    $(".ayarlar_acilan_bolum").slideUp()
    $(".katogoriler_dersler_acilan_bolum").slideUp();
    $(".katogoriler_sinavlar_acilan_bolum").slideUp();
});

$("#mothertable_icon_setting").click(function(){
    $(".hakkinda_acilan_bolum").slideUp()
    $(".katagori_acilan_bolum").slideUp()
    $(".iletisim_acilan_bolum").slideUp()
    $(".ayarlar_acilan_bolum").slideToggle()
    $(".katogoriler_dersler_acilan_bolum").slideUp();
    $(".katogoriler_sinavlar_acilan_bolum").slideUp();
});

$("#katogoriler_dersler_acilan_bolum__acma_buttonu").click(function(){
    $(".katagori_acilan_bolum").slideUp();
    $(".katogoriler_dersler_acilan_bolum").slideDown();
    $(".katogoriler_sinavlar_acilan_bolum").slideUp();
});

$("#katogoriler_sinavlar_acilan_bolum__acma_buttonu").click(function(){
    $(".katagori_acilan_bolum").slideUp();
    $(".katogoriler_dersler_acilan_bolum").slideUp();
    $(".katogoriler_sinavlar_acilan_bolum").slideDown();
});

$(".katagoriler_alt_bolumleri_kapatma_buttonu").click(function(){
    $(".katogoriler_dersler_acilan_bolum").slideUp();
    $(".katogoriler_sinavlar_acilan_bolum").slideUp();
    $(".katagori_acilan_bolum").slideDown();
});


$("#ayarlar_arka_plan_rengi__yesil").click(function(){
    $("body").css({"background-color": "green"});
});

$("#ayarlar_arka_plan_rengi__sari").click(function(){
    $("body").css({"background-color": "yellow"});
});

$("#ayarlar_arka_plan_rengi__mavi").click(function(){ // Arka plan rengi
    $("body").css({"background-color": "blue"});
});

$("#ayarlar_arka_plan_rengi__siyah").click(function(){
    $("body").css({"background-color": "black"});
});

$("#ayarlar_arka_plan_rengi__beyaz").click(function(){ 
    $("body").css({"background-color": "white"});
});


$("#ayarlar_yazi_rengi__yesil").click(function(){
    $("body").css({"color": "green"});
});

$("#ayarlar_yazi_rengi__sari").click(function(){
    $("body").css({"color": "yellow"});
});

$("#ayarlar_yazi_rengi__mavi").click(function(){ // Yazı rengi
    $("body").css({"color": "blue"});
});

$("#ayarlar_yazi_rengi__siyah").click(function(){
    $("body").css({"color": "black"});
});

$("#ayarlar_yazi_rengi__beyaz").click(function(){
    $("body").css({"color": "white"});
});


$("#ayarlar_ikon_rengi__yesil").click(function(){
    $("i").css({"color": "green"});
});

$("#ayarlar_ikon_rengi__sari").click(function(){
    $("i").css({"color": "yellow"});
});

$("#ayarlar_ikon_rengi__mavi").click(function(){ // İkon rengi
    $("i").css({"color": "blue"});
});

$("#ayarlar_ikon_rengi__siyah").click(function(){
    $("i").css({"color": "black"});
});

$("#ayarlar_ikon_rengi__beyaz").click(function(){
    $("i").css({"color": "white"});
});


$("#ayarlar_menu_araligi__cok").click(function(){
    $("i").css({"padding-left": "10vh", "padding-right": "10vh"});
});

$("#ayarlar_menu_araligi__orta").click(function(){
    $("i").css({"padding-left": "5vh", "padding-right": "5vh"});
});

$("#ayarlar_menu_araligi__az").click(function(){ // İkon aralığı
    $("i").css({"padding-left": "3vh", "padding-right": "3vh"});
});

$("#ayarlar_menu_araligi__cok_az").click(function(){
    $("i").css({"padding-left": "1vh", "padding-right": "1vh"});
});

$("#ayarlar_menu_araligi__yok").click(function(){
    $("i").css({"padding-left": "0", "padding-right": "0"});
});
