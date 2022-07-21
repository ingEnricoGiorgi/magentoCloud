define(["uiComponent"], function (Component) {
    "use strict";

    console.log("PROVA CONSOLE.LOG");

    return Component.extend({
        defaults: {
            nuovoTicketLabel: "Default String",
            customTasks: [
                { idt: 1, ticket: " TESTO Ticket 1", status: true },
                { idt: 2, ticket: " TESTO Ticket 2", status: false },
                { idt: 3, ticket: " TESTO Ticket 3", status: false },
            ],
            initObservable: function () {
                this._super().observe(["customTasks"]);
                return this;
            },
            prova: function () {
                console.log("testJS");
                return this;
            },
            //ogni volta che si verifica l'evento,
            //il click passerà data e event
            //gli input della funzione consentono di accedere all'oggetto event
            cambiaStatus: function (data, event) {
                //Recupera il data-id dell'elemento che ha scatenato l'evento
                const idElemento = $(event.target).data("id");

                var elementi = this.lista().map(function (ticket) {
                    if (ticket.idt === idElemento) {
                        ticket.status = !ticket.status;
                    }
                    return ticket;
                });
                this.lista(elementi);
                console.log(idElemento+"cliccato");
                console.log(this.lista.idElemento.status);

            },
        },
    });
});
