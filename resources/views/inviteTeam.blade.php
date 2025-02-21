@extends('layouts.app')

<div class="centered-container">
        <fieldset disabled>
            <input type="text" id="disabledTextInput" class="form-control" value="{{ $id }}">
        </fieldset>
        <button class="btn btn-success" onclick="copy()">Kopieer</button>
</div>

<script>
    function copy() {

        var copyText = document.getElementById("disabledTextInput");

        copyText.select();

        navigator.clipboard.writeText(copyText.value);
    }
</script>
