// --- PHẦN LOGIC GIAO DIỆN ---
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});


// --- PHẦN CHỐNG DEVTOOLS (F12, Chuột phải, v.v.) ---
// Lưu ý: Mã này chỉ mang tính răn đe, người có kỹ thuật vẫn có thể vượt qua.

// Chặn chuột phải
document.addEventListener('contextmenu', function(e) {
  e.preventDefault();
});

// Chặn các phím tắt mở DevTools
document.onkeydown = function(e) {
    if (e.keyCode == 123) { // F12
        return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) { // Ctrl+Shift+I
        return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) { // Ctrl+Shift+J
        return false;
    }
    if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) { // Ctrl+U
        return false;
    }
};

// Phát hiện DevTools bằng cách liên tục gọi debugger
// Khi DevTools mở, nó sẽ dừng lại ở dòng này, gây treo trình duyệt
(function() {
    (function a() {
        try {
            (function b(i) {
                if (('' + (i / i)).length !== 1 || i % 20 === 0) {
                    (function() {}).constructor('debugger')();
                } else {
                    debugger;
                }
                b(++i);
            })(0);
        } catch (e) {
            setTimeout(a, 5000);
        }
    })();
})();
