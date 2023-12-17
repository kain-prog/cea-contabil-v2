function submitForm3() {

    const form = document.getElementById('form-3');
    document.getElementById('submitButton-3').disabled = true;
    document.getElementById('submitButtonText-3').classList.add('hidden')
    document.getElementById('loadingSpinner-3').classList.remove('hidden');
    form.submit();
}