# Descrizione
Impariamo a modellare la struttura dei nostri database grazie alle Migrations!

# MIlestone 1
1. creiamo un DB e chiamiamolo train <train_db>
2. inseriamo i dati .env per stabilire una connessione con il DB
3. Creiamo una tabella trains e relativa Migration, cercando di capire la natura dei campi necessari. 

Ogni treno dovrà avere:
- id                      √ |-> id()
- Data                    √ |-> date (date)
- Azienda                 √ |-> company (varchar, 200)
- Tipo treno              √ |-> train_type (varchar, 50)
- Stazione di partenza    √ |-> departure_station (varchar, 60)
- Stazione di arrivo      √ |-> arrival_station (varchar, 60)
- Orario di partenza      √ |-> departure_time (time, not_nullable)
- Orario di arrivo        √ |-> arrival_time (time, not_nullable)
- Codice Treno            √ |-> train_number (varchar, 5)
- Totale Carrozze         √ |-> total_carriages (number, 2)
- Se in orario o meno     √ |-> is_on_time (boolean, not_nullable)
- Ritardo                 √ |-> delay_minutes(TINYINT, nullable)
- Se cancellato o meno      |-> is_cancelled (boolean, not_nullable)

È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto√
Inventiamo dei dati fittizi e inseriamoli tramite PhpMyAdmin.√

# Milestone 2
Creiamo un Model per i treni ed un relativo Controller per poi mostrare nella home page tutti i treni che sono in partenza dalla data odierna in avanti, in ordine cronologico.√

# Bonus 
Con un po' di fantasia inventiamo lo stile del nostro tabellone treni! 
Posso suggerire il font "Share Tech Mono"?

