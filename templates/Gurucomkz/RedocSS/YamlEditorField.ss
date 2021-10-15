<div $EditorAttributesHTML>$Value.RAW</div>
<input $AttributesHTML />
<script>
    (function(ace,f,t){
        var input = document.getElementById(t);
        var editor = ace.edit(f);
        editor.setTheme("ace/theme/monokai");
        editor.session.setMode("ace/mode/yaml");

        editor.session.on('change', function(delta) {
            input.value = editor.getValue();
        });
    })(window.ace,"$EditorID","$ID")
</script>
