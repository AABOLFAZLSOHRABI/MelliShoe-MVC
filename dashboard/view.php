<?php

class view
{

    public function header($reviews_waiting)
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
                                vazir: ['Vazirmatn', 'system-ui', 'sans-serif'],
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

        <body class="font-vazir bg-gray-50 m-0 antialiased">
            <aside class="fixed top-0 right-0 bottom-0 w-60 bg-[#00286d] z-40 flex flex-col overflow-y-auto">
                <div class="flex items-center gap-2 p-5 border-b border-white/10">
                    <span class="text-white text-lg font-extrabold">کفش ملی</span>
                </div>
                <nav class="flex-1 px-3 py-4">
                    <div class="text-[11px] text-white/40 px-2 mt-2 mb-1 tracking-wide">اصلی</div>
                    <button type="button" data-tab="dashboard"
                        class="sidebar-link flex items-center gap-2 p-2 rounded-lg transition-all text-white/70 hover:bg-white/10 hover:text-white w-full text-right mb-1">
                        <span class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center shrink-0"><svg
                                class="w-[17px] h-[17px] fill-current" viewBox="0 0 20 20">
                                <path d="M2 11h7V2H2v9zm0 7h7v-5H2v5zm9 0h7v-9h-7v9zm0-16v5h7V2h-7z" />
                            </svg></span>
                        داشبورد
                    </button>
                    <div class="text-[11px] text-white/40 px-2 mt-4 mb-1">مدیریت</div>
                    <button type="button" data-tab="products"
                        class="sidebar-link flex items-center gap-2 p-2 rounded-lg transition-all text-white/70 hover:bg-white/10 hover:text-white w-full text-right mb-1">
                        <span class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center shrink-0"><svg
                                class="w-[17px] h-[17px] fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M4 3h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm1 2v10h10V5H5zm2 2h6v2H7V7zm0 4h6v2H7v-2z" />
                            </svg></span>
                        محصولات
                    </button>
                    <button type="button" data-tab="categories"
                        class="sidebar-link flex items-center gap-2 p-2 rounded-lg transition-all text-white/70 hover:bg-white/10 hover:text-white w-full text-right mb-1">
                        <span class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center shrink-0"><svg
                                class="w-[17px] h-[17px] fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M2 4a2 2 0 0 1 2-2h3.586A2 2 0 0 1 9 2.586L10.414 4H16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4z" />
                            </svg></span>
                        دسته‌بندی‌ها
                    </button>
                    <button type="button" data-tab="comments"
                        class="sidebar-link flex items-center gap-2 p-2 rounded-lg transition-all text-white/70 hover:bg-white/10 hover:text-white w-full text-right mb-1">
                        <span class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center shrink-0"><svg
                                class="w-[17px] h-[17px] fill-current" viewBox="0 0 20 20">
                                <path d="M2 5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H6l-4 4V5z" />
                            </svg></span>
                        نظرات
                        <span
                            class="mr-auto bg-white/20 text-white text-[11px] px-2 py-0.5 rounded-full"><?php echo count($reviews_waiting); ?></span>
                    </button>
                    <button type="button" data-tab="admins"
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
                    <form action="utils/logout.php" method="post">
                        <input type="hidden" name="action" value="logout">
                        <button type="submit"
                            class="flex items-center gap-2 p-2 rounded-lg transition-all text-rose-300/90 hover:bg-white/5 w-full text-right">
                            <span class="w-9 h-9 rounded-lg bg-rose-500/20 flex items-center justify-center shrink-0"><svg
                                    class="w-[17px] h-[17px] fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M3 3h8a1 1 0 0 1 1 1v2h-2V5H4v10h6v-1h2v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm10.293 3.293 3.414 3.414a1 1 0 0 1 0 1.414l-3.414 3.414-1.414-1.414L13.586 11H7V9h6.586l-1.707-1.707 1.414-1.414z" />
                                </svg></span>
                            خروج از سیستم
                        </button>
                    </form>
                </div>
            </aside>


            <?php
    }
    public function footer()
    {
        ?>

            <script src="utils/script.js"></script>
        </body>

        </html>
        <?php
    }

    public function index($products, $categories, $reviews, $admins, $reviews_waiting)
    {
        $this->header($reviews_waiting);
        ?>
        <div class="mr-60 min-h-screen bg-gray-50 flex flex-col">
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-7 sticky top-0 z-30">
                <div class="text-lg font-extrabold text-[#1a1a2e]" id="pageTitle">داشبورد</div>
            </header>

            <main class="flex-1 p-7">
                <section id="dashboardSection">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                        <div class="bg-white rounded-2xl border border-gray-100 p-5 flex flex-col gap-2 shadow-sm">
                            <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center"><svg
                                    class="w-5 h-5 fill-[#00286d]" viewBox="0 0 20 20">
                                    <path
                                        d="M4 3h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm1 2v10h10V5H5zm2 2h6v2H7V7zm0 4h6v2H7v-2z" />
                                </svg></div>
                            <div class="text-3xl font-extrabold text-gray-900"><?php echo count($products); ?></div>
                            <div class="text-sm font-semibold text-gray-500">محصولات</div>
                        </div>
                        <div class="bg-white rounded-2xl border p-5">
                            <div class="w-11 h-11 rounded-xl bg-green-50 flex items-center justify-center"><svg
                                    class="w-5 h-5 fill-green-600" viewBox="0 0 20 20">
                                    <path
                                        d="M2 4a2 2 0 0 1 2-2h3.586A2 2 0 0 1 9 2.586L10.414 4H16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4z" />
                                </svg></div>
                            <div class="text-3xl font-extrabold"><?php echo count($categories); ?></div>
                            <div class="text-sm font-semibold text-gray-500">دسته‌بندی‌ها</div>
                        </div>
                        <div class="bg-white rounded-2xl border p-5">
                            <div class="w-11 h-11 rounded-xl bg-orange-50 flex items-center justify-center"><svg
                                    class="w-5 h-5 fill-orange-600" viewBox="0 0 20 20">
                                    <path d="M2 5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H6l-4 4V5z" />
                                </svg></div>
                            <div class="text-3xl font-extrabold"><?php echo count($reviews); ?></div>
                            <div class="text-sm font-semibold text-gray-500">نظرات </div>
                        </div>
                        <div class="bg-white rounded-2xl border p-5">
                            <div class="w-11 h-11 rounded-xl bg-purple-50 flex items-center justify-center"><svg
                                    class="w-5 h-5 fill-purple-700" viewBox="0 0 20 20">
                                    <path
                                        d="M9 6a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm-4 8a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v1a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-1z" />
                                </svg></div>
                            <div class="text-3xl font-extrabold"><?php echo count($admins); ?></div>
                            <div class="text-sm font-semibold text-gray-500">مدیران سیستم</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="bg-white rounded-2xl border overflow-hidden">
                            <div class="flex justify-between items-center px-5 py-4 border-b">
                                <h3 class="font-extrabold text-gray-800">آخرین نظرات</h3><button type="button"
                                    data-tab-target="comments" class="text-blue-600 text-sm font-bold bg-transparent">مشاهده
                                    همه</button>
                            </div>
                            <div>
                                <?php
                                $count = 1;
                                foreach ($reviews as $review) {
                                    if ($count > 3) {
                                        break;
                                    }
                                    $count++;
                                    ?>
                                    <div class="flex gap-3 p-4 border-b">
                                        <div class="flex-1">
                                            <div class="font-bold text-gray-800"><?php echo $review['customer_name']; ?></div>
                                            <?php
                                            $rating = $review['rating'];
                                            for ($i = 1; $i <= 5; $i++) {
                                                if ($i <= $rating) {
                                                    echo '<span class="text-amber-500 text-base">★</span>';
                                                } else {
                                                    echo '<span class="text-gray-300 text-base">★</span>';
                                                }
                                            }
                                            ?>
                                            <div class="text-xs text-gray-500"><?php echo $review['comment']; ?></div>
                                        </div>
                                        <div> <?php
                                        if ($review['is_verified'] == 1) {
                                            ?>
                                                <td><span class="px-2 py-0.5 rounded-full text-xs bg-green-100 text-green-800">
                                                        تایید</span></td>
                                                <?php
                                        } else {
                                            ?>
                                                <td><span class="px-2 py-0.5 rounded-full text-xs bg-yellow-100 text-yellow-800">
                                                        در انتظار تایید</span></td>
                                                <?php
                                        }

                                        ?>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl border overflow-hidden">
                            <div class="flex justify-between px-5 py-4 border-b">
                                <h3 class="font-extrabold">محصولات اخیر</h3><button type="button" data-tab-target="products"
                                    class="text-blue-600 text-sm font-bold">مشاهده همه</button>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="p-3 text-right">نام محصول</th>
                                            <th>برند</th>
                                            <th>قیمت</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($products as $product) { ?>
                                            <tr class="border-b">
                                                <td class="p-3 font-bold"><?php echo $product['name']; ?></td>
                                                <td><?php echo $product['brand']; ?></td>
                                                <td><?php echo number_format($product['price']); ?> تومن</td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="productsSection" class="hidden">
                    <div class="flex justify-between items-center mb-5">
                        <div>
                            <h2 class="text-xl font-extrabold text-gray-900">مدیریت محصولات</h2>
                            <p class="text-xs text-gray-400"><?php echo count($products); ?> محصول</p>
                        </div><button type="button" data-modal-open="productModal"
                            class="bg-[#00286d] text-white rounded-xl px-4 py-2 text-sm font-bold">+ افزودن محصول</button>
                    </div>
                    <div class="bg-white rounded-2xl border overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="p-3 text-right">#</th>
                                        <th>نام محصول</th>
                                        <th>برند</th>
                                        <th>دسته</th>
                                        <th>تعداد</th>
                                        <th>قیمت (تومان)</th>
                                        <th>قیمت قبل</th>
                                        <th>تاریخ بروزرسانی</th>
                                        <th>تصویر</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $product) {
                                        ?>

                                        <tr class="border-b hover:bg-gray-50">
                                            <td class="p-3 text-gray-400 text-xs"><?php echo $product['id']; ?></td>
                                            <td class="font-bold"><?php echo $product['name']; ?></td>
                                            <td><?php echo $product['brand']; ?></td>
                                            <td><span class="bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full text-xs"><?php
                                            foreach ($categories as $category) {
                                                if ($category['id'] == $product['category_id']) {
                                                    echo $category['name'];
                                                    break;
                                                }
                                            }
                                            ?></span>
                                            </td>
                                            <td><?php echo $product['count']; ?></td>
                                            <td><?php echo number_format($product['price']); ?></td>
                                            <td class="line-through text-gray-400">
                                                <?php echo (empty($product['old_price']) ? "" : number_format($product['old_price'])); ?>
                                            </td>
                                            <td class="text-xs text-gray-400"><?php echo $product['updated_at']; ?></td>
                                            <td><?php echo $product['image']; ?></td>
                                            <td><button type="button" data-modal-open="productEditModal"
                                                    class="text-blue-600 font-bold ml-2">ویرایش</button>
                                                <form action="dashboard/controller.php" method="post" class="inline"><input
                                                        type="hidden" name="action" value="delete_product"><input type="hidden"
                                                        name="id" value="1"><button type="submit"
                                                        class="text-red-600 font-bold">حذف</button></form>
                                            </td>
                                        </tr>
                                        <?php
                                    } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <section id="categoriesSection" class="hidden">
                    <div class="flex justify-between mb-5">
                        <div>
                            <h2 class="text-xl font-extrabold">دسته‌بندی‌ها</h2>
                            <p class="text-xs text-gray-400"><?php echo count($categories); ?> دسته</p>
                        </div><button type="button" data-modal-open="categoryModal"
                            class="bg-[#00286d] text-white rounded-xl px-4 py-2 text-sm"> افزودن دسته +</button>
                    </div>
                    <div class="bg-white rounded-2xl border overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="p-3">#</th>
                                    <th>نام دسته</th>
                                    <th>آدرس تصویر</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($categories as $category) {
                                    ?>
                                    <tr class="border-b">
                                        <td class="p-3 text-gray-400"><?php echo $category['id']; ?></td>
                                        <td class="font-bold"><?php echo $category['name']; ?></td>
                                        <td class="text-gray-400 text-xs"><?php echo $category['image']; ?></td>
                                        <td><button type="button" data-modal-open="categoryEditModal"
                                                class="text-blue-600 ml-2">ویرایش</button>
                                            <form action="dashboard/controller.php" method="post" class="inline"><input
                                                    type="hidden" name="action" value="delete_category"><input type="hidden"
                                                    name="id" value="1"><button type="submit" class="text-red-600">حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                } ?>



                            </tbody>
                        </table>
                    </div>
                </section>

                <section id="commentsSection" class="hidden">
                    <div class="flex justify-between mb-5">
                        <div>
                            <h2 class="text-xl font-extrabold">نظرات مشتریان</h2>
                            <p class="text-xs"><?php echo count($reviews_waiting); ?> نظر در انتظار</p>
                        </div><button type="button" data-modal-open="commentModal"
                            class="bg-[#00286d] text-white rounded-xl px-4 py-2">+ ثبت نظر</button>
                    </div>
                    <div class="bg-white rounded-2xl border overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th>#</th>
                                    <th>مشتری</th>
                                    <th>امتیاز</th>
                                    <th>متن نظر</th>
                                    <th>وضعیت</th>
                                    <th>تاریخ</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($reviews as $review) {
                                    ?>
                                    <tr class="border-b">
                                        <td class="p-2"><?php echo $review['id']; ?></td>
                                        <td class="font-bold"><?php echo $review['customer_name']; ?></td>
                                        <td><span class="text-amber-500 text-base"><?php
                                        $rating = $review['rating'];
                                        for ($i = 1; $i <= 5; $i++) {
                                            if ($i <= $rating) {
                                                echo '<span class="text-amber-500 text-base">★</span>';
                                            } else {
                                                echo '<span class="text-gray-300 text-base">★</span>';
                                            }
                                        }
                                        ?></span></td>
                                        <td class="max-w-xs truncate"><?php echo $review['comment']; ?></td>
                                        <?php
                                        if ($review['is_verified'] == 1) {
                                            ?>
                                            <td><span class="px-2 py-0.5 rounded-full text-xs bg-green-100 text-green-800">
                                                    تایید</span></td>
                                            <?php
                                        } else {
                                            ?>
                                            <td><span class="px-2 py-0.5 rounded-full text-xs bg-yellow-100 text-yellow-800">
                                                    در انتظار تایید</span></td>
                                            <?php
                                        }

                                        ?>
                                        <td class="text-xs"><?php echo $review['created_at']; ?></td>
                                        <td><button type="button" data-modal-open="commentEditModal"
                                                class="text-blue-600 ml-2">ویرایش</button>
                                            <form action="dashboard/controller.php" method="post" class="inline"><input
                                                    type="hidden" name="action" value="delete_comment"><input type="hidden"
                                                    name="id" value="1"><button type="submit" class="text-red-600">حذف</button>
                                            </form>
                                        </td>
                                    </tr>

                                    <?php
                                }
                                ?>


                            </tbody>
                        </table>
                    </div>
                </section>

                <section id="adminsSection" class="hidden">
                    <div class="flex justify-between mb-5">
                        <div>
                            <h2 class="text-xl font-extrabold">مدیران سیستم</h2>
                            <p class="text-xs"> <?php echo count($admins); ?> مدیر</p>
                        </div><button type="button" data-modal-open="adminModal"
                            class="bg-[#00286d] text-white rounded-xl px-4 py-2">+ مدیر جدید</button>
                    </div>
                    <div class="bg-white rounded-2xl border overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th>#</th>
                                    <th>نام کاربری</th>
                                    <th>ایمیل</th>
                                    <th>آخرین ورود</th>
                                    <th>آخرین بروزرسانی</th>
                                    <th>تاریخ ایجاد</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($admins as $admin) { ?>
                                    <tr class="border-b">
                                        <td class="p-2"><?php echo $admin['id']; ?></td>
                                        <td class="font-bold"><?php echo $admin['username']; ?></td>
                                        <td><?php echo $admin['email']; ?></td>
                                        <td class="text-xs"><?php echo $admin['last_login_at'] ?? 'هنوز وارد نشده'; ?></td>
                                        <td class="text-xs"><?php echo $admin['updated_at']; ?></td>
                                        <td class="text-xs"><?php echo $admin['created_at']; ?></td>
                                        <?php
                                        if ($admin['id'] == 1) {
                                            ?>
                                            <td><button type="button" data-modal-open="adminUpdateModal-<?php echo $admin['id']; ?>"
                                                    class="text-blue-600 ml-2">ویرایش</button>
                                            </td>
                                            <?php
                                        } else {
                                            ?>
                                            <td><button type="button" data-modal-open="adminUpdateModal-<?php echo $admin['id']; ?>"
                                                    class="text-blue-600 ml-2">ویرایش</button>
                                                <button type="button" data-modal-open="adminDeleteModal-<?php echo $admin['id']; ?>"
                                                    class="text-red-600">حذف</button>
                                            </td>
                                            <?php
                                        } ?>

                                    </tr><?php } ?>


                            </tbody>
                        </table>
                    </div>
                </section>
            </main>
        </div>
        <!-- modal -->
        <div id="productModal" class="fixed inset-0 z-50 bg-black/45 flex items-center justify-center p-4 hidden">
            <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden shadow-2xl">
                <form action="dashboard/controller.php" method="post"><input type="hidden" name="action" value="add_product">
                    <div class="bg-[#00286d] p-4 flex justify-between items-center">
                        <h3 class="text-white font-extrabold text-base">افزودن محصول</h3><button type="button"
                            data-modal-close="productModal" class="text-white/70 hover:text-white text-2xl leading-5">×</button>
                    </div>
                    <div class="p-5">
                        <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">نام محصول
                                *</label><input name="name" type="text" required placeholder="کفش اسپرت نایک"
                                class="w-full p-2 border border-gray-200 rounded-xl text-sm focus:border-[#00286d] outline-none">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">برند محصول
                                    *</label><input name="brand" type="text" required placeholder="نایک"
                                    class="w-full p-2 border border-gray-200 rounded-xl text-sm focus:border-[#00286d] outline-none">
                            </div>
                            <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">دسته‌بندی
                                    *</label><select name="category_id" required
                                    class="w-full p-2 border border-gray-200 rounded-xl text-sm focus:border-[#00286d] outline-none">
                                    <option value="1">مردانه</option>
                                    <option value="2">زنانه</option>
                                    <option value="3">بچگانه</option>
                                </select></div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">قیمت (تومان)
                                    *</label><input name="price" type="number" required placeholder="0"
                                    class="w-full p-2 border border-gray-200 rounded-xl text-sm"></div>
                            <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">قیمت قبل
                                    (تومان)</label><input name="old_price" type="number" placeholder="0"
                                    class="w-full p-2 border border-gray-200 rounded-xl text-sm"></div>
                        </div>
                        <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">آدرس تصویر</label><input
                                name="image" type="text" placeholder="images/shoe.jpg"
                                class="w-full p-2 border border-gray-200 rounded-xl text-sm"></div>
                    </div>
                    <div class="p-4 border-t border-gray-100 flex gap-2"><button type="submit"
                            class="bg-[#00286d] text-white rounded-xl px-4 py-2 text-sm font-bold hover:bg-[#001f54] transition">ذخیره</button><button
                            type="button" data-modal-close="productModal"
                            class="bg-white text-gray-700 border border-gray-300 rounded-xl px-4 py-2 text-sm font-semibold hover:bg-gray-50">انصراف</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="productEditModal" class="fixed inset-0 z-50 bg-black/45 flex items-center justify-center p-4 hidden">
            <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden shadow-2xl">
                <form action="dashboard/controller.php" method="post"><input type="hidden" name="action"
                        value="edit_product"><input type="hidden" name="id" value="1">
                    <div class="bg-[#00286d] p-4 flex justify-between items-center">
                        <h3 class="text-white font-extrabold text-base">ویرایش محصول نمونه</h3><button type="button"
                            data-modal-close="productEditModal"
                            class="text-white/70 hover:text-white text-2xl leading-5">×</button>
                    </div>
                    <div class="p-5">
                        <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">نام محصول
                                *</label><input name="name" type="text" required value="کفش نایک ایر مکس"
                                class="w-full p-2 border border-gray-200 rounded-xl text-sm focus:border-[#00286d] outline-none">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">برند محصول
                                    *</label><input name="brand" type="text" required value="نایک"
                                    class="w-full p-2 border border-gray-200 rounded-xl text-sm focus:border-[#00286d] outline-none">
                            </div>
                            <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">دسته‌بندی
                                    *</label><select name="category_id" required
                                    class="w-full p-2 border border-gray-200 rounded-xl text-sm focus:border-[#00286d] outline-none">
                                    <option value="1" selected>مردانه</option>
                                    <option value="2">زنانه</option>
                                    <option value="3">بچگانه</option>
                                </select></div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">قیمت (تومان)
                                    *</label><input name="price" type="number" required value="2850000"
                                    class="w-full p-2 border border-gray-200 rounded-xl text-sm"></div>
                            <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">قیمت قبل
                                    (تومان)</label><input name="old_price" type="number" value="3490000"
                                    class="w-full p-2 border border-gray-200 rounded-xl text-sm"></div>
                        </div>
                        <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">آدرس تصویر</label><input
                                name="image" type="text" value="/shoes/nike1.jpg"
                                class="w-full p-2 border border-gray-200 rounded-xl text-sm"></div>
                    </div>
                    <div class="p-4 border-t border-gray-100 flex gap-2"><button type="submit"
                            class="bg-[#00286d] text-white rounded-xl px-4 py-2 text-sm font-bold hover:bg-[#001f54] transition">ذخیره</button><button
                            type="button" data-modal-close="productEditModal"
                            class="bg-white text-gray-700 border border-gray-300 rounded-xl px-4 py-2 text-sm font-semibold hover:bg-gray-50">انصراف</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="categoryModal" class="fixed inset-0 z-50 bg-black/45 flex items-center justify-center p-4 hidden">
            <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden shadow-2xl">
                <form action="dashboard/controller.php" method="post"><input type="hidden" name="action" value="add_category">
                    <div class="bg-[#00286d] p-4 flex justify-between items-center">
                        <h3 class="text-white font-extrabold">دسته جدید</h3><button type="button"
                            data-modal-close="categoryModal" class="text-white/70 hover:text-white text-2xl">×</button>
                    </div>
                    <div class="p-5">
                        <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">نام دسته *</label><input
                                name="name" required placeholder="مردانه" class="w-full p-2 border rounded-xl"></div>
                        <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">آدرس تصویر</label><input
                                name="image" placeholder="img/category.jpg" class="w-full p-2 border rounded-xl"></div>
                    </div>
                    <div class="p-4 border-t flex gap-2"><button type="submit"
                            class="bg-[#00286d] text-white rounded-xl px-4 py-2 text-sm font-bold">ذخیره</button><button
                            type="button" data-modal-close="categoryModal"
                            class="bg-white border border-gray-300 rounded-xl px-4 py-2 text-sm">انصراف</button></div>
                </form>
            </div>
        </div>
        <div id="categoryEditModal" class="fixed inset-0 z-50 bg-black/45 flex items-center justify-center p-4 hidden">
            <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden shadow-2xl">
                <form action="dashboard/controller.php" method="post"><input type="hidden" name="action"
                        value="edit_category"><input type="hidden" name="id" value="1">
                    <div class="bg-[#00286d] p-4 flex justify-between items-center">
                        <h3 class="text-white font-extrabold">ویرایش دسته نمونه</h3><button type="button"
                            data-modal-close="categoryEditModal" class="text-white/70 hover:text-white text-2xl">×</button>
                    </div>
                    <div class="p-5">
                        <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">نام دسته *</label><input
                                name="name" required value="مردانه" class="w-full p-2 border rounded-xl"></div>
                        <div class="mb-3"><label class="block text-sm font-bold text-gray-700 mb-1">آدرس تصویر</label><input
                                name="image" value="/img/men.jpg" class="w-full p-2 border rounded-xl"></div>
                    </div>
                    <div class="p-4 border-t flex gap-2"><button type="submit"
                            class="bg-[#00286d] text-white rounded-xl px-4 py-2 text-sm font-bold">ذخیره</button><button
                            type="button" data-modal-close="categoryEditModal"
                            class="bg-white border border-gray-300 rounded-xl px-4 py-2 text-sm">انصراف</button></div>
                </form>
            </div>
        </div>

        <div id="commentModal" class="fixed inset-0 z-50 bg-black/45 flex items-center justify-center p-4 hidden">
            <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden">
                <form action="dashboard/controller.php" method="post"><input type="hidden" name="action" value="add_comment">
                    <div class="bg-[#00286d] p-4 flex justify-between">
                        <h3 class="text-white font-extrabold">ثبت نظر</h3><button type="button" data-modal-close="commentModal"
                            class="text-white/70 hover:text-white text-2xl">×</button>
                    </div>
                    <div class="p-5">
                        <div class="grid grid-cols-2 gap-4">
                            <div><label>نام مشتری *</label><input name="customer_name" required
                                    class="w-full p-2 border rounded-xl"></div>
                            <div><label>امتیاز (1-5) *</label><input name="rating" type="number" min="1" max="5" required
                                    class="w-full p-2 border rounded-xl"></div>
                        </div>
                        <div class="my-3"><label>متن نظر *</label><textarea name="comment" rows="3"
                                class="w-full p-2 border rounded-xl"></textarea></div>
                        <div class="flex items-center gap-2"><input type="checkbox" name="is_verified" value="1"
                                class="w-4 h-4"><label class="text-sm font-semibold text-gray-700">تایید شده</label></div>
                    </div>
                    <div class="p-4 border-t flex gap-2"><button type="submit"
                            class="bg-[#00286d] text-white rounded-xl px-4 py-2">ذخیره</button><button type="button"
                            data-modal-close="commentModal" class="bg-white border rounded-xl px-4 py-2">انصراف</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="commentEditModal" class="fixed inset-0 z-50 bg-black/45 flex items-center justify-center p-4 hidden">
            <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden">
                <form action="dashboard/controller.php" method="post"><input type="hidden" name="action"
                        value="edit_comment"><input type="hidden" name="id" value="1">
                    <div class="bg-[#00286d] p-4 flex justify-between">
                        <h3 class="text-white font-extrabold">ویرایش نظر نمونه</h3><button type="button"
                            data-modal-close="commentEditModal" class="text-white/70 hover:text-white text-2xl">×</button>
                    </div>
                    <div class="p-5">
                        <div class="grid grid-cols-2 gap-4">
                            <div><label>نام مشتری *</label><input name="customer_name" value="مهدی کریمی" required
                                    class="w-full p-2 border rounded-xl"></div>
                            <div><label>امتیاز (1-5) *</label><input name="rating" type="number" min="1" max="5" value="5"
                                    required class="w-full p-2 border rounded-xl"></div>
                        </div>
                        <div class="my-3"><label>متن نظر *</label><textarea name="comment" rows="3"
                                class="w-full p-2 border rounded-xl">کیفیت عالی، ارسال سریع</textarea></div>
                        <div class="flex items-center gap-2"><input type="checkbox" name="is_verified" value="1" checked
                                class="w-4 h-4"><label class="text-sm font-semibold text-gray-700">تایید شده</label></div>
                    </div>
                    <div class="p-4 border-t flex gap-2"><button type="submit"
                            class="bg-[#00286d] text-white rounded-xl px-4 py-2">ذخیره</button><button type="button"
                            data-modal-close="commentEditModal" class="bg-white border rounded-xl px-4 py-2">انصراف</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="adminModal" class="fixed inset-0 z-50 bg-black/45 flex items-center justify-center p-4 hidden">
            <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden">
                <form action="dashboard.php" method="post"><input type="hidden" name="action" value="add_admin">
                    <div class="bg-[#00286d] p-4 flex justify-between">
                        <h3 class="text-white font-extrabold">مدیر جدید</h3><button type="button" data-modal-close="adminModal"
                            class="text-white/70 hover:text-white text-2xl">×</button>
                    </div>
                    <div class="p-5">
                        <div class="grid grid-cols-2 gap-4">
                            <div><label>نام کاربری *</label><input name="username" required
                                    class="w-full p-2 border rounded-xl"></div>
                            <div><label>ایمیل *</label><input name="email" type="email" required
                                    class="w-full p-2 border rounded-xl"></div>
                        </div>
                        <div class="my-3"><label>رمز عبور *</label><input name="password" type="password" required
                                class="w-full p-2 border rounded-xl"></div>
                    </div>
                    <div class="p-4 border-t flex gap-2"><button type="submit"
                            class="bg-[#00286d] text-white rounded-xl px-4 py-2">ذخیره</button><button type="button"
                            data-modal-close="adminModal" class="bg-white border rounded-xl px-4 py-2">انصراف</button></div>
                </form>
            </div>
        </div>
        <?php foreach ($admins as $admin) { ?>
            <div id="adminUpdateModal-<?php echo $admin['id']; ?>"
                class="fixed inset-0 z-50 bg-black/45 flex items-center justify-center p-4 hidden">
                <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden">
                    <form action="dashboard.php" method="post"><input type="hidden" name="action" value="update_admin"><input
                            type="hidden" name="id" value="<?php echo $admin['id']; ?>">
                        <div class="bg-[#00286d] p-4 flex justify-between">
                            <h3 class="text-white font-extrabold">ویرایش مدیر</h3><button type="button"
                                data-modal-close="adminUpdateModal-<?php echo $admin['id']; ?>"
                                class="text-white/70 hover:text-white text-2xl">×</button>
                        </div>
                        <div class="p-5">
                            <div class="grid grid-cols-2 gap-4">
                                <div><label>نام کاربری *</label><input name="username" value="<?php echo $admin['username']; ?>"
                                        required class="w-full p-2 border rounded-xl"></div>
                                <div><label>ایمیل *</label><input name="email" type="email" value="<?php echo $admin['email']; ?>"
                                        required class="w-full p-2 border rounded-xl"></div>
                            </div>

                        </div>
                        <div class="p-4 border-t flex gap-2"><button type="submit"
                                class="bg-[#00286d] text-white rounded-xl px-4 py-2">ذخیره</button><button type="button"
                                data-modal-close="adminUpdateModal-<?php echo $admin['id']; ?>"
                                class="bg-white border rounded-xl px-4 py-2">انصراف</button>
                        </div>
                    </form>
                </div>
            </div>
        <?php } ?>
        <?php foreach ($admins as $admin) { ?>
            <div id="adminDeleteModal-<?php echo $admin['id']; ?>"
                class="fixed inset-0 z-50 bg-black/45 flex items-center justify-center p-4 hidden">
                <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden shadow-2xl">
                    <form action="dashboard.php" method="post">
                        <input type="hidden" name="action" value="delete_admin">
                        <input type="hidden" name="id" value="<?php echo $admin['id']; ?>">
                        <div class="bg-red-600 p-4 flex justify-between">
                            <h3 class="text-white font-extrabold">حذف مدیر</h3>
                            <button type="button" data-modal-close="adminDeleteModal-<?php echo $admin['id']; ?>"
                                class="text-white/70 hover:text-white text-2xl">×</button>
                        </div>
                        <div class="p-5">
                            <p class="text-sm text-gray-700 leading-7">
                                آیا از حذف مدیر
                                <span class="font-bold text-gray-900"><?php echo $admin['username']; ?></span>
                                مطمئن هستید؟
                            </p>
                        </div>
                        <div class="p-4 border-t flex gap-2">
                            <button type="submit" class="bg-red-600 text-white rounded-xl px-4 py-2">حذف</button>
                            <button type="button" data-modal-close="adminDeleteModal-<?php echo $admin['id']; ?>"
                                class="bg-white border rounded-xl px-4 py-2">انصراف</button>
                        </div>
                    </form>
                </div>
            </div>
        <?php } ?>
        <?php
        $this->footer();
    }
}
