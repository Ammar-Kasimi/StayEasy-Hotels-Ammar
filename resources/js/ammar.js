document.addEventListener('DOMContentLoaded', function() {
document.querySelectorAll('.status_select').forEach(e=>{e.addEventListener('change',this.closest('form').submit());})
})