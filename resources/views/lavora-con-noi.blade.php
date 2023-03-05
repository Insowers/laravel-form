@extends('templates.template')

@section('title', 'lavora con noi')
    
@section('body')
    <form method="POST" action="stampa" class="col-6" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Cognome</label>
            <input type="text" name="cognome" class="form-control">
        </div>

        <div class="col-12 col-md-6 mb-3">
            <label class="form-check-label mb-3"><span>Genere</span></label>
            <br>
            <input class="form-check-input" type="radio" name="genere" value="d" id="donna">
            <label class="form-check-label" for="donna"><span>donna</span></label>
            <input class="form-check-input" type="radio" name="genere" value="u" id="uomo">
            <label class="form-check-label" for="uomo"><span>uomo</span></label>
        </div>

        <div class="col-12 col-md-4 mb-3">
            <label class="form-label"><span>Inserire data di nascita</span></label>
            <input type="date"class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label"><span>Citt&agrave;</span></label>
            <input type="text" name="citta" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Indirizzo</label>
            <input type="text" name="indirizzo" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Linguaggi:</label>
            <br>
            <input type="checkbox" id="js" name="vehicle1" value="Bike">
            <label class="form-label" for="js">JavaScript</label><br>
            <input type="checkbox" id="php" name="vehicle2" value="Car">
            <label class="form-label" for="php">PHP</label><br>
            <input type="checkbox" id="nmn" name="vehicle3" value="Boat">
            <label class="form-label" for="nmn">No more needed 🤣</label><br><br>
        </div>

        <div class="mb-3">
            <label class="form-label" for="text">Informazioni aggiuntive</label>
            <br>
            <textarea class="form-control" name="text" rows="4" cols="50"id="text"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label" for="text">Curriculum</label>
            <br>
            <input type="file" name="file">
        </div>

        <button type="submit" name="invia" class="btn btn-primary mt-3">Invia</button>
    </form>
@endsection