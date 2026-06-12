<?php

class view
{

    public function header()
    {
        ?>
        <!DOCTYPE html>
        <html lang="fa" dir="rtl" class="scroll-smooth text-[16px]">

        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>ورود به پنل مدیریت | کفش ملی</title>
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;600;700;800&display=swap"
                rel="stylesheet" />
            <script>
                tailwind = {
                    config: {
                        theme: {
                            extend: {
                                fontFamily: {
                                    vazir: ['Vazirmatn', 'system-ui', 'sans-serif'],
                                },
                                screens: {
                                    nav: { max: '1200px' },
                                    mobile: { max: '760px' },
                                },
                            },
                        },
                    },
                };
            </script>
            <script src="https://cdn.tailwindcss.com"></script>
            <style>
                /* subtle custom enhancements to match the reference design language */
                .login-card {
                    transition: all 0.2s ease;
                }

                .input-focus-ring:focus {
                    outline: none;
                    ring: 2px solid #00286d;
                    ring-opacity: 0.2;
                    border-color: #00286d;
                }

                /* additional smoothness */
                button {
                    transition: all 0.2s ease;
                }
            </style>
        </head>
        <?php
    }
    public function footer()
    {
        ?>
        </body>

        </html>
        <?php
    }

    public function index($message)
    {
        $this->header();
        ?>
        <body class="m-0 bg-white font-vazir text-[#242424]">
            <div class="min-w-[320px] overflow-x-hidden">
                <main class="flex min-h-[calc(100vh-88px-398px)] items-center justify-center py-20 px-5 mobile:py-12">
                    <!-- Centered login card - follows design language from reference (rounded corners, subtle shadows, bg-[#f8f5f0] surfaces, clean typography) -->
                    <div class="w-full max-w-[540px]">
                        <!-- Card container: elevated with shadow, soft rounded corners, border-light, bg-white same as product card style -->
                        <div
                            class="login-card rounded-[24px] bg-white shadow-[0_18px_48px_rgba(0,0,0,0.08)] border border-[rgba(165,165,165,0.25)] overflow-hidden">
                            <!-- decorative top accent bar with brand dark blue -->
                            <div class="h-2 bg-[#00286d]"></div>

                            <div class="p-8 md:p-10">
                                <!-- header with icon & title aligned to RTL context -->
                                <div class="flex flex-col items-center text-center mb-8">
                                    <div
                                        class="mb-5 inline-flex h-20 w-20 items-center justify-center rounded-full bg-[#f8f5f0] shadow-sm">
                                        <svg class="w-10 h-10 text-[#00286d]" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" stroke-width="1.5" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                                        </svg>
                                    </div>
                                    <h1
                                        class="text-[32px] font-bold leading-[42px] tracking-[-0.96px] text-[#242424] mobile:text-[28px] mobile:leading-9">
                                        ورود به پنل مدیریت
                                    </h1>
                                    <p class="mt-3 text-[16px] leading-[24px] tracking-[-0.48px] text-[#a5a5a5]">
                                        دسترسی اختصاصی مدیران فروشگاه کفش ملی
                                    </p>
                                </div>
                                <?php if ($message): ?>
                                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                        <strong class="font-bold">خطا!</strong>
                                        <span class="block sm:inline"><?php echo $message; ?></span>
                                    </div>
                                <?php endif; ?>
                                <!-- Login Form -->
                                <form class="flex flex-col gap-6" action="login.php" method="post">
                                    <!-- Email input field -->
                                    <div class="flex flex-col gap-2 text-right">
                                        <label
                                            class="flex items-center gap-1 text-[16px] font-bold leading-[22px] tracking-[-0.48px] text-[#242424]"
                                            for="email">
                                            <svg class="h-4 w-4 fill-[#00286d]" viewBox="0 0 20 20" aria-hidden="true">
                                                <path
                                                    d="M2.5 3.75h15a.625.625 0 0 1 .625.625v11.25a.625.625 0 0 1-.625.625h-15a.625.625 0 0 1-.625-.625V4.375A.625.625 0 0 1 2.5 3.75ZM10 10.625 3.125 6.25v8.125h13.75V6.25L10 10.625Zm0-1.25L16.25 5h-12.5L10 9.375Z" />
                                            </svg>
                                            ایمیل
                                        </label>
                                        <input type="email" id="email" name="email" autocomplete="email" required
                                            class="w-full rounded-[12px] border border-[rgba(165,165,165,0.6)] bg-white px-4 py-3 text-[16px] leading-6 tracking-[-0.48px] text-[#242424] transition-all duration-150 placeholder:text-[#a5a5a5] focus:border-[#00286d] focus:outline-none focus:ring-2 focus:ring-[#00286d]/20"
                                            placeholder="admin@mellishoes.ir" />
                                    </div>

                                    <!-- Password input field -->
                                    <div class="flex flex-col gap-2 text-right">
                                        <label
                                            class="flex items-center gap-1 text-[16px] font-bold leading-[22px] tracking-[-0.48px] text-[#242424]"
                                            for="password">
                                            <svg class="h-4 w-4 fill-[#00286d]" viewBox="0 0 20 20" aria-hidden="true">
                                                <path
                                                    d="M10 2.5a4.375 4.375 0 0 0-4.375 4.375V8.75h8.75V6.875A4.375 4.375 0 0 0 10 2.5ZM4.375 8.75v-.875a5.625 5.625 0 0 1 11.25 0v.875h.625a1.875 1.875 0 0 1 1.875 1.875v6.25a1.875 1.875 0 0 1-1.875 1.875H4.375a1.875 1.875 0 0 1-1.875-1.875v-6.25a1.875 1.875 0 0 1 1.875-1.875h.625Z" />
                                            </svg>
                                            رمز عبور
                                        </label>
                                        <input type="password" id="password" name="password" autocomplete="current-password"
                                            required
                                            class="w-full rounded-[12px] border border-[rgba(165,165,165,0.6)] bg-white px-4 py-3 text-[16px] leading-6 tracking-[-0.48px] text-[#242424] transition-all duration-150 placeholder:text-[#a5a5a5] focus:border-[#00286d] focus:outline-none focus:ring-2 focus:ring-[#00286d]/20"
                                            placeholder="••••••••" />
                                    </div>
                                    <!-- Submit button (primary call to action inspired by brand buttons) -->
                                    <button type="submit" name="submit"
                                        class="mt-4 flex w-full items-center justify-center gap-2 rounded-[12px] bg-[#00286d] py-3.5 text-[16px] font-bold leading-6 tracking-[-0.48px] text-white transition-all duration-200 hover:bg-[#001f54] hover:shadow-md focus:outline-none focus:ring-2 focus:ring-[#00286d]/50 active:scale-[0.98]">
                                        <svg class="h-5 w-5 fill-white" viewBox="0 0 20 20" aria-hidden="true">
                                            <path
                                                d="M10 3.125a.625.625 0 0 1 .625.625v7.5a.625.625 0 1 1-1.25 0v-7.5A.625.625 0 0 1 10 3.125Z" />
                                            <path
                                                d="M9.118 9.632a.624.624 0 0 1 .882-.014l2.5 2.5a.624.624 0 0 1 0 .882l-2.5 2.5a.624.624 0 0 1-.882-.882l1.616-1.618-1.616-1.617a.625.625 0 0 1 0-.883Z" />
                                            <path
                                                d="M5.625 2.5a.624.624 0 0 1 .625.625V5h7.5V3.125a.624.624 0 1 1 1.25 0v13.75a.624.624 0 1 1-1.25 0V15h-7.5v1.875a.624.624 0 1 1-1.25 0V3.125a.624.624 0 0 1 .625-.625Z" />
                                        </svg>
                                        ورود به پنل مدیریت
                                    </button>

                                    <!-- subtle link to main site (main site styling pattern) -->
                                    <div class="mt-5 text-center text-[14px] leading-5 tracking-[-0.48px] text-[#a5a5a5]">
                                        <span>بازگشت به </span>
                                        <a href="/MelliShoe-MVC"
                                            class="font-medium text-[#00286d] transition-opacity duration-150 hover:opacity-70">صفحه
                                            اصلی فروشگاه</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- extra design note: decorative consistent with reference -->
                        <div class="mt-8 text-center text-[12px] leading-5 text-[#a5a5a5]">
                            <span class="inline-flex items-center gap-1">پنل امن مدیریت · کفش ملی</span>
                        </div>
                    </div>
                </main>
            </div>

                <?php
                $this->footer();
    }
}