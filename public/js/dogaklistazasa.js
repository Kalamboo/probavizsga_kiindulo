class Szakdoga{
    constructor(node, adat){
        this.node = node;
        this.adat = adat;
        this.id = adat.id;
        this.szakdoga_nev = this.node.children(".szakdogCim");
        this.githublink = this.node.children(".gitLink");
        this.oldallink = this.node.children(".oldLink");
        this.tagokneve = this.node.children(".keszNev");

        this.szakDModosit = this.node.children(".modositas").children("button");
        this.szakDTorol = this.node.children(".torles").children("button");
        this.setAdat(this.adat);

        this.szakDModosit.on("click", () => {
            this.modositasKatt();
        });
        this.szakDTorol.on("click", () => {
            this.torolKatt();
        });
    }

    setAdat(adat){
        this.adat = adat;
        this.szakdoga_nev.html(adat.szakdoga_nev);
        this.githublink.html(adat.githublink);
        this.oldallink.html(adat.oldallink);
        this.tagokneve.html(adat.tagokneve);
    }

    modositasKatt(){
        let esemeny = new CustomEvent("szakDogModosit", {
            detail: this.adat,
        });
        window.dispatchEvent(esemeny);
    }

    torolKatt(){
        let esemeny = new CustomEvent("szakDogTorol", {
            detail: this.adat,
        });
        window.dispatchEvent(esemeny);
    }
}