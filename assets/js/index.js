// function getSrc(input) {

//     console.log("hi")

//     if (input.files && input.files[0]) {
//         let reader = new FileReader();

//         reader.addEventListener('load', (e) => {
//             const img = document.querySelector('.addedImg');
//             console.log(e.target.result)
//             img.src = e.target.result;
//         });

//         reader.readAsDataURL(input.files[0]);
//     }
// }

// const fileForm = document.querySelector('.fileInput');

// console.log(fileForm)

// fileForm.addEventListener('input', () => {
// 	console.log(fileForm.value)
// })

// const images = document.querySelectorAll('img');

// console.log(images)



let loadFile = function(event) {
	const inputFile = document.querySelector('.fileInput');

	const validateField = document.querySelector('.validate');
	validateField.value = inputFile.value
};