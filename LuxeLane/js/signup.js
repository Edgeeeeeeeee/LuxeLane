document.querySelectorAll('input[type="radio"]').forEach((input) => {
    input.addEventListener('click', function() {
        const selectedGender = this.value;

        document.querySelectorAll('.form-check-label').forEach((label) => {
            label.style.color = "#161103";
        });

        document.querySelectorAll('.gender-icon').forEach((icon) => {
            icon.style.backgroundColor = "#CCCCCC";
        });

        if (selectedGender === 'male') {
            document.getElementById('male-icon').style.backgroundColor = "#EFB928";
            document.querySelector('label[for="male"]').style.color = "#EFB928";
        } else if (selectedGender === 'female') {
            document.getElementById('female-icon').style.backgroundColor = "#EFB928";
            document.querySelector('label[for="female"]').style.color = "#EFB928";
        } else if (selectedGender === 'other') {
            document.getElementById('other-icon').style.backgroundColor = "#EFB928";
            document.querySelector('label[for="other"]').style.color = "#EFB928";
        }
    });
});
