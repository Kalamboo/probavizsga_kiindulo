$(function () {
    const myAjax = new MyAjax;
    const szakdogaTomb = [];

    myAjax.adatBetolt("/api/szakdoga", szakdogaTomb, szakDMegjel);

    function szakDMegjel(adat) {
        console.log(adat);
        const szuloelem = $(".szakdogakLista");
        const sablonelem = $("#szakdogaSablon .szakdoga");
        szuloelem.empty();
        sablonelem.show();

        adat.forEach(function (elem) {
            let node = sablonelem.clone().appendTo(szuloelem);
            const obj = new Szakdoga(node, elem);
        });
        sablonelem.hide();
    }

    $(window).on("szakDogTorol", (event) => {
        console.log(event.detail.id);
        myAjax.adatTorles("/api/szakdoga", event.detail.id);
        window.location.reload();
    });

    $(window).on("szakDogModosit", (event) => {
        console.log(event.detail.id);
        let mezo0 = $("#none");
        let mezo1 = $("#szakdoga_nev");
        let mezo2 = $("#githublink");
        let mezo3 = $("#oldallink");
        let mezo4 = $("#tagokneve");

        mezo0.val(event.detail.id);
        mezo1.val(event.detail.szakdoga_nev);
        mezo2.val(event.detail.githublink);
        mezo3.val(event.detail.oldallink);
        mezo4.val(event.detail.tagokneve);
    });

    $("ajaxModosit").on("click", () => {
        let adat= {}
        adat.id= $("#none").val();
        adat.szakdoga_nev= $("#szakdoga_nev").val();
        adat.githublink=$("#githublink").val();
        adat.oldallink= $("#oldallink").val();
        adat.tagokneve= $("#tagokneve").val();
        console.log(adat);
        myAjax.adatPut("/api/szakdoga", adat, adat.id);
        myAjax.adatBetolt("/api/szakdoga", szakdogaTomb, szakDMegjel);
        
        $("#none").val('');
        $("#szakdoga_nev").val('');
        $("#githublink").val('');
        $("#oldallink").val('');
        $("#tagokneve").val('');
    });
});