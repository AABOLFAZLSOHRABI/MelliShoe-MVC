<?php

class view
{

    public function header()
    {
        ?>
        <!DOCTYPE html>
        <html lang="fa" dir="rtl" class="scroll-smooth">

        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>پنل مدیریت | کفش ملی</title>
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;600;700;800&display=swap"
                rel="stylesheet" />
            <script src="https://cdn.tailwindcss.com"></script>
            <script>
                tailwind.config = {
                    theme: {
                        extend: {
                            fontFamily: {
                                'vazir': ['Vazirmatn', 'system-ui', 'sans-serif'],
                            }
                        }
                    }
                }
            </script>
            <style>
                table th,
                table td {
                    text-align: right;
                    vertical-align: middle;
                }
            </style>
        </head>

        <?php
    }
    public function footer()
    {
        ?>
        <script src="utils/script.js" defer></script>
        </body>

        </html>
        <?php
    }

    public function index($get_admins)
    {
        $this->header();
        ?>

        <body class="font-vazir bg-gray-50 m-0 antialiased">

            <!-- Sidebar (fixed, navy blue) -->
            <aside class="fixed top-0 right-0 bottom-0 w-60 bg-[#00286d] z-40 flex flex-col overflow-y-auto">
                <div class="flex items-center gap-2 p-5 border-b border-white/10">

                    <span class="text-white text-lg font-extrabold">کفش ملی</span>
                </div>
                <nav class="flex-1 px-3 py-4">
                    <div class="text-[11px] text-white/40 px-2 mt-2 mb-1 tracking-wide">اصلی</div>
                    <button data-tab="dashboard"
                        class="sidebar-link flex items-center gap-2 p-2 rounded-lg transition-all text-white/70 hover:bg-white/10 hover:text-white w-full text-right mb-1">
                        <span class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center shrink-0"><svg
                                class="w-[17px] h-[17px] fill-current" viewBox="0 0 20 20">
                                <path d="M2 11h7V2H2v9zm0 7h7v-5H2v5zm9 0h7v-9h-7v9zm0-16v5h7V2h-7z" />
                            </svg></span>
                        داشبورد
                    </button>
                    <div class="text-[11px] text-white/40 px-2 mt-4 mb-1">مدیریت</div>
                    <button data-tab="products"
                        class="sidebar-link flex items-center gap-2 p-2 rounded-lg transition-all text-white/70 hover:bg-white/10 hover:text-white w-full text-right mb-1">
                        <span class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center shrink-0"><svg
                                class="w-[17px] h-[17px] fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M4 3h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm1 2v10h10V5H5zm2 2h6v2H7V7zm0 4h6v2H7v-2z" />
                            </svg></span>
                        محصولات
                    </button>
                    <button data-tab="categories"
                        class="sidebar-link flex items-center gap-2 p-2 rounded-lg transition-all text-white/70 hover:bg-white/10 hover:text-white w-full text-right mb-1">
                        <span class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center shrink-0"><svg
                                class="w-[17px] h-[17px] fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M2 4a2 2 0 0 1 2-2h3.586A2 2 0 0 1 9 2.586L10.414 4H16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4z" />
                            </svg></span>
                        دسته‌بندی‌ها
                    </button>
                    <button data-tab="comments"
                        class="sidebar-link flex items-center gap-2 p-2 rounded-lg transition-all text-white/70 hover:bg-white/10 hover:text-white w-full text-right mb-1">
                        <span class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center shrink-0"><svg
                                class="w-[17px] h-[17px] fill-current" viewBox="0 0 20 20">
                                <path d="M2 5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H6l-4 4V5z" />
                            </svg></span>
                        نظرات
                        <span id="commentsBadge"
                            class="mr-auto bg-white/20 text-white text-[11px] px-2 py-0.5 rounded-full hidden"></span>
                    </button>
                    <button data-tab="admins"
                        class="sidebar-link flex items-center gap-2 p-2 rounded-lg transition-all text-white/70 hover:bg-white/10 hover:text-white w-full text-right mb-1">
                        <span class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center shrink-0"><svg
                                class="w-[17px] h-[17px] fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M9 6a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm-4 8a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v1a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-1z" />
                            </svg></span>
                        مدیران سیستم
                    </button>
                </nav>
                <div class="p-3 border-t border-white/10">
                    <div class="flex items-center gap-2 p-2 mb-2">
                        <div
                            class="w-9 h-9 rounded-full bg-[#00286d] text-white flex items-center justify-center text-xs font-bold border border-white/20">
                            مد</div>
                        <div>
                            <div class="text-white text-sm font-bold">مدیر ارشد</div>
                            <div class="text-white/50 text-[11px]">admin@mellishoes.ir</div>
                        </div>
                    </div>
                    <button onclick="alert('خروج از سیستم')"
                        class="flex items-center gap-2 p-2 rounded-lg transition-all text-rose-300/90 hover:bg-white/5 w-full text-right">
                        <span class="w-9 h-9 rounded-lg bg-rose-500/20 flex items-center justify-center shrink-0"><svg
                                class="w-[17px] h-[17px] fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M3 3h8a1 1 0 0 1 1 1v2h-2V5H4v10h6v-1h2v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm10.293 3.293 3.414 3.414a1 1 0 0 1 0 1.414l-3.414 3.414-1.414-1.414L13.586 11H7V9h6.586l-1.707-1.707 1.414-1.414z" />
                            </svg></span>
                        خروج از سیستم
                    </button>
                </div>
            </aside>

            <!-- Main wrapper with margin right = sidebar width -->
            <div class="mr-60 min-h-screen bg-gray-50 flex flex-col">
                <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-7 sticky top-0 z-30">
                    <div class="text-lg font-extrabold text-[#1a1a2e]" id="pageTitle">داشبورد</div>
                </header>

                <main class="flex-1 p-7">
                    <div id="dashboardSection"></div>
                    <div id="productsSection" class="hidden"></div>
                    <div id="categoriesSection" class="hidden"></div>
                    <div id="commentsSection" class="hidden"></div>
                    <div id="adminsSection" class="hidden"></div>
                </main>
            </div>

            <!-- Product Modal -->
            <div id="productModal" class="fixed inset-0 z-50 bg-black/45 flex items-center justify-center p-4 hidden">
                <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden shadow-2xl">
                    <div class="bg-[#00286d] p-4 flex justify-between items-center">
                        <h3 class="text-white font-extrabold text-base" id="productModalTitle">افزودن محصول</h3>
                        <button class="text-white/70 hover:text-white text-2xl leading-5 close-product-modal">×</button>
                    </div>
                    <div class="p-5">
                        <form id="productForm">
                            <input type="hidden" id="productId">
                            <div class="mb-3">
                                <label class="block text-sm font-bold text-gray-700 mb-1">نام محصول *</label>
                                <input id="prodName" type="text" required placeholder="کفش اسپرت نایک"
                                    class="w-full p-2 border border-gray-200 rounded-xl text-sm focus:border-[#00286d] outline-none">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">برند محصول
                                        *</label><input id="prodBrand" type="text" required placeholder="نایک"
                                        class="w-full p-2 border border-gray-200 rounded-xl text-sm focus:border-[#00286d] outline-none">
                                </div>
                                <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">دسته‌بندی
                                        *</label><select id="prodCategoryId" required
                                        class="w-full p-2 border border-gray-200 rounded-xl text-sm focus:border-[#00286d] outline-none"></select>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">قیمت (تومان)
                                        *</label><input id="prodPrice" type="number" required placeholder="0"
                                        class="w-full p-2 border border-gray-200 rounded-xl text-sm"></div>
                                <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">قیمت قبل
                                        (تومان)</label><input id="prodOldPrice" type="number" placeholder="0"
                                        class="w-full p-2 border border-gray-200 rounded-xl text-sm"></div>
                            </div>
                            <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">آدرس تصویر</label><input
                                    id="prodImage" type="text" placeholder="images/shoe.jpg"
                                    class="w-full p-2 border border-gray-200 rounded-xl text-sm"></div>
                        </form>
                    </div>
                    <div class="p-4 border-t border-gray-100 flex gap-2">
                        <button onclick="document.getElementById('productForm').requestSubmit()"
                            class="bg-[#00286d] text-white rounded-xl px-4 py-2 text-sm font-bold hover:bg-[#001f54] transition">ذخیره</button>
                        <button
                            class="close-product-modal bg-white text-gray-700 border border-gray-300 rounded-xl px-4 py-2 text-sm font-semibold hover:bg-gray-50">انصراف</button>
                    </div>
                </div>
            </div>

            <!-- Category Modal -->
            <div id="categoryModal" class="fixed inset-0 z-50 bg-black/45 flex items-center justify-center p-4 hidden">
                <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden shadow-2xl">
                    <div class="bg-[#00286d] p-4 flex justify-between items-center">
                        <h3 id="catModalTitle" class="text-white font-extrabold">دسته جدید</h3>
                        <button class="text-white/70 hover:text-white text-2xl close-category-modal">×</button>
                    </div>
                    <div class="p-5">
                        <form id="categoryForm"><input type="hidden" id="catId">
                            <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">نام دسته *</label><input
                                    id="catName" required placeholder="مردانه" class="w-full p-2 border rounded-xl"></div>
                            <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">آدرس تصویر</label><input
                                    id="catImage" placeholder="img/category.jpg" class="w-full p-2 border rounded-xl"></div>
                        </form>
                    </div>
                    <div class="p-4 border-t flex gap-2"><button
                            onclick="document.getElementById('categoryForm').requestSubmit()"
                            class="bg-[#00286d] text-white rounded-xl px-4 py-2 text-sm font-bold">ذخیره</button><button
                            class="close-category-modal bg-white border border-gray-300 rounded-xl px-4 py-2 text-sm">انصراف</button>
                    </div>
                </div>
            </div>

            <!-- Comment Modal -->
            <div id="commentModal" class="fixed inset-0 z-50 bg-black/45 flex items-center justify-center p-4 hidden">
                <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden">
                    <div class="bg-[#00286d] p-4 flex justify-between">
                        <h3 id="commentModalTitle" class="text-white font-extrabold">ویرایش نظر</h3><button
                            class="close-comment-modal text-white/70 hover:text-white text-2xl">×</button>
                    </div>
                    <div class="p-5">
                        <form id="commentForm"><input type="hidden" id="commentId">
                            <div class="grid grid-cols-2 gap-4">
                                <div><label>نام مشتری *</label><input id="commentCustomer" required
                                        class="w-full p-2 border rounded-xl">
                                </div>
                                <div><label>امتیاز (1-5) *</label><input id="commentRating" type="number" min="1" max="5"
                                        required class="w-full p-2 border rounded-xl"></div>
                            </div>
                            <div class="my-3"><label>متن نظر *</label><textarea id="commentText" rows="3"
                                    class="w-full p-2 border rounded-xl"></textarea></div>
                            <div class="flex items-center gap-2"><input type="checkbox" id="commentVerified"
                                    class="w-4 h-4"><label class="text-sm font-semibold text-gray-700">تایید شده</label></div>
                        </form>
                    </div>
                    <div class="p-4 border-t flex gap-2"><button
                            onclick="document.getElementById('commentForm').requestSubmit()"
                            class="bg-[#00286d] text-white rounded-xl px-4 py-2">ذخیره</button><button
                            class="close-comment-modal bg-white border rounded-xl px-4 py-2">انصراف</button></div>
                </div>
            </div>

            <!-- Admin Modal (password_hash removed) -->
            <div id="adminModal" class="fixed inset-0 z-50 bg-black/45 flex items-center justify-center p-4 hidden">
                <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden">
                    <div class="bg-[#00286d] p-4 flex justify-between">
                        <h3 id="adminModalTitle" class="text-white font-extrabold">مدیر جدید</h3><button
                            class="close-admin-modal text-white/70 hover:text-white text-2xl">×</button>
                    </div>
                    <div class="p-5">
                        <form id="adminForm"><input type="hidden" id="adminId">
                            <div class="grid grid-cols-2 gap-4">
                                <div><label>نام کاربری *</label><input id="adminUsername" required
                                        class="w-full p-2 border rounded-xl">
                                </div>
                                <div><label>ایمیل *</label><input id="adminEmail" type="email" required
                                        class="w-full p-2 border rounded-xl"></div>
                            </div>
                            <div class="my-3"><label>آخرین ورود (اختیاری)</label><input id="adminLastLogin"
                                    placeholder="2025-02-01 14:30" class="w-full p-2 border rounded-xl"></div>
                        </form>
                    </div>
                    <div class="p-4 border-t flex gap-2"><button onclick="document.getElementById('adminForm').requestSubmit()"
                            class="bg-[#00286d] text-white rounded-xl px-4 py-2">ذخیره</button><button
                            class="close-admin-modal bg-white border rounded-xl px-4 py-2">انصراف</button></div>
                </div>
            </div>

            <?php
            $this->footer();
    }
}