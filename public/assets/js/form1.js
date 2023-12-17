function submitForm1() {

    const form = document.getElementById('form-1');
    document.getElementById('submitButton-1').disabled = true;
    document.getElementById('submitButtonText-1').classList.add('hidden')
    document.getElementById('loadingSpinner-1').classList.remove('hidden');
    form.submit();
}