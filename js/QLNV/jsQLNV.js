
    function toggleForm() {  
        const form = document.getElementById('employeeForm');  
        const overlay = document.getElementById('overlay');  
        const isVisible = form.style.display === 'block';  
        form.style.display = isVisible ? 'none' : 'block';  
        overlay.style.display = isVisible ? 'none' : 'block';   
    }  

    function addEmployee() {  
        const maNV = document.getElementById('employeeID').value;  
        const tenNV = document.getElementById('employeeName').value;  
        const ngaySinh = document.getElementById('employeeBirthday').value;  
        const gioiTinh = document.getElementById('employeeGender').value;  
        const diaChi = document.getElementById('employeeAddress').value;  
        const email = document.getElementById('employeeEmail').value;  
        const sdt = document.getElementById('employeePhone').value;  
        const position = document.getElementById('employeePosition').value;  
        const branch = document.getElementById('branch').value;  

        if (!maNV || !tenNV || !ngaySinh || !gioiTinh || !diaChi || !email || !sdt || !position || !branch) {  
            alert("Vui lòng điền đủ thông tin.");  
            return;  
        }  

        const table = document.getElementById('employee-list');  
        const newRow = table.insertRow();  
        newRow.innerHTML = `  
            <td><i class='fas fa-user'></i></td>  
            <td>${tenNV}</td>  
            <td>${position}</td>  
            <td>${branch}</td>  
            <td>  
                <a href='#'>Xem chi tiết</a> |  
                <a href='#'>Sửa</a> |  
                <a href='#' onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>  
            </td>  
        `;  

        // Reset form fields  
        document.getElementById('employeeID').value = '';  
        document.getElementById('employeeName').value = '';  
        document.getElementById('employeeBirthday').value = '';  
        document.getElementById('employeeGender').value = '';  
        document.getElementById('employeeAddress').value = '';  
        document.getElementById('employeeEmail').value = '';  
        document.getElementById('employeePhone').value = '';  
        document.getElementById('employeePosition').value = '';  
        document.getElementById('branch').value = '';  

        toggleForm(); // Ẩn form và overlay  
    }  
