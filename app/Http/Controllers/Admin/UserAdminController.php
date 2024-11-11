<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminsIndex()
    {
        $admins = User::where('type', 'admin')->get();
        return view('admin.users.admins.index', compact('admins'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function createAdmin()
    {
        return view('admin.users.admins.create'); // Trả về view form tạo tài khoản admin
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeAdmin(Request $request)
    {
        // Validate dữ liệu (loại bỏ phần validate password nếu không yêu cầu nhập mật khẩu)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        // Tạo tài khoản admin với mật khẩu mặc định
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt('123@123ab'); // Mật khẩu mặc định
        $user->type = 'admin'; // Thiết lập loại tài khoản là admin
        $user->save();
        // Chuyển hướng về danh sách admin
        return redirect()->route('admin.users.admins.index')->with('success', 'Tài khoản admin đã được thêm thành công với mật khẩu mặc định.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editAdmin($id)
{
    // Tìm tài khoản admin theo ID
    $admin = User::findOrFail($id);
    
    // Kiểm tra nếu đây là tài khoản admin
    if ($admin->type !== 'admin') {
        return redirect()->back()->with('error', 'Không thể sửa tài khoản không phải admin.');
    }

    return view('admin.users.admins.edit', compact('admin'));
}

// Xử lý cập nhật tài khoản admin
public function updateAdmin(Request $request, $id)
{
    
    $admin = User::findOrFail($id);

   
    if ($admin->type !== 'admin') {
        return redirect()->back()->with('error', 'Không thể sửa tài khoản không phải admin.');
    }

    // Validate dữ liệu
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $id,
    ]);

    // Cập nhật thông tin
    $admin->name = $request->name;
    $admin->email = $request->email;

    // Kiểm tra nếu muốn thay đổi mật khẩu
    

    $admin->save();

    // Chuyển hướng về danh sách admin với thông báo thành công
    return redirect()->route('admin.users.admins.index')->with('success', 'Tài khoản admin đã được cập nhật thành công.');
}

public function resetPassword($id)
{
    // Tìm tài khoản admin theo ID
    $admin = User::findOrFail($id);

    // Kiểm tra nếu đây là tài khoản admin
    if ($admin->type !== 'admin') {
        return redirect()->back()->with('error', 'Không thể reset password cho tài khoản không phải admin.');
    }

    // Đặt lại mật khẩu về mật khẩu mặc định
    $admin->password = bcrypt('123@123ab'); // Mật khẩu mặc định
    $admin->save();

    // Chuyển hướng về danh sách admin với thông báo thành công
    return redirect()->route('admin.users.admins.index')->with('success', 'Mật khẩu đã được đặt lại thành công về mặc định.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
