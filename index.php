<?php

try {
    $db = new PDO('mysql:host=localhost;port=3307;dbname=meli', 'root', '');
} catch (PDOException $e) {
    die('Database error: ' . $e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="fa" dir="rtl" class="scroll-smooth text-[16px]">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>کفش ملی</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;700&display=swap" rel="stylesheet" />
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
</head>

<body class="m-0 bg-white font-vazir text-[#242424]">
    <div class="min-w-[320px] overflow-x-hidden">
        <header class="bg-[#f8f5f0]" aria-label="ناوبری اصلی">
            <div
                class="mx-auto flex h-[88px] max-w-[1440px] items-center justify-between gap-8 px-8 py-2 nav:h-auto nav:flex-wrap nav:justify-center mobile:px-4 mobile:py-3">
                <a class="flex shrink-0 items-center gap-2 text-[24px] font-bold leading-[30px] tracking-[-0.72px] nav:order-[-2]"
                    href="#" aria-label="صفحه اصلی کفش ملی">
                    <img class="block h-[70px] w-[70px] scale-[1.57] object-cover object-center max-w-full"
                        src="uploads/logo.png" alt="کفش ملی" />
                    <span>کفش ملی</span>
                </a>

                <nav class="flex w-[624px] items-center justify-between gap-1 whitespace-nowrap text-[16px] font-bold tracking-[-0.48px] nav:w-full nav:justify-center nav:overflow-x-auto nav:pb-2 mobile:justify-start"
                    aria-label="دسته‌بندی‌ها">
                    <a class="flex items-center gap-1 transition-opacity duration-150 ease-in hover:opacity-70"
                        href="#">مردانه
                        <svg class="h-3 w-3 fill-current" viewBox="0 0 12 8" aria-hidden="true">
                            <path d="M6 8 0 0h12L6 8Z" />
                        </svg></a>
                    <span class="w-2 text-center text-[24px] font-bold leading-none text-[#00286d]"
                        aria-hidden="true">•</span>
                    <a class="flex items-center gap-1 transition-opacity duration-150 ease-in hover:opacity-70"
                        href="#">زنانه
                        <svg class="h-3 w-3 fill-current" viewBox="0 0 12 8" aria-hidden="true">
                            <path d="M6 8 0 0h12L6 8Z" />
                        </svg></a>
                    <span class="w-2 text-center text-[24px] font-bold leading-none text-[#00286d]"
                        aria-hidden="true">•</span>
                    <a class="flex items-center gap-1 transition-opacity duration-150 ease-in hover:opacity-70"
                        href="#">بچگانه
                        <svg class="h-3 w-3 fill-current" viewBox="0 0 12 8" aria-hidden="true">
                            <path d="M6 8 0 0h12L6 8Z" />
                        </svg></a>
                    <span class="w-2 text-center text-[24px] font-bold leading-none text-[#00286d]"
                        aria-hidden="true">•</span>
                    <a class="flex items-center gap-1 transition-opacity duration-150 ease-in hover:opacity-70"
                        href="#">لوازم
                        ایمنی <svg class="h-3 w-3 fill-current" viewBox="0 0 12 8" aria-hidden="true">
                            <path d="M6 8 0 0h12L6 8Z" />
                        </svg></a>
                    <span class="w-2 text-center text-[24px] font-bold leading-none text-[#00286d]"
                        aria-hidden="true">•</span>
                    <a class="flex items-center gap-1 transition-opacity duration-150 ease-in hover:opacity-70"
                        href="#">کیف <svg class="h-3 w-3 fill-current" viewBox="0 0 12 8" aria-hidden="true">
                            <path d="M6 8 0 0h12L6 8Z" />
                        </svg></a>
                    <span class="w-2 text-center text-[24px] font-bold leading-none text-[#00286d]"
                        aria-hidden="true">•</span>
                    <a class="flex items-center gap-1 transition-opacity duration-150 ease-in hover:opacity-70"
                        href="#">لوازم
                        جانبی <svg class="h-3 w-3 fill-current" viewBox="0 0 12 8" aria-hidden="true">
                            <path d="M6 8 0 0h12L6 8Z" />
                        </svg></a>
                </nav>

                <div class="flex items-center gap-2 [direction:ltr] nav:order-[-1]" aria-label="عملیات کاربری">
                    <a class="grid h-6 w-6 place-items-center transition-opacity duration-150 ease-in hover:opacity-70"
                        href="#" aria-label="سبد خرید">
                        <svg class="block h-6 w-6 fill-black max-w-full" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M18.19 17.75H7.54c-.99 0-1.94-.42-2.61-1.15A3.45 3.45 0 0 1 4 13.9l.83-9.96c.03-.31-.08-.61-.29-.84-.21-.23-.5-.35-.81-.35H2a.75.75 0 0 1 0-1.5h1.74c.73 0 1.42.31 1.91.84.27.3.47.65.58 1.04h12.49c1.01 0 1.94.4 2.62 1.12.67.73 1.01 1.68.93 2.69l-.54 7.5c-.11 1.83-1.71 3.31-3.54 3.31ZM6.28 4.62l-.78 9.4c-.05.58.14 1.13.53 1.56.39.43.93.66 1.51.66h10.65c1.04 0 1.98-.88 2.06-1.92l.54-7.5c.04-.59-.15-1.15-.54-1.56-.39-.42-.93-.65-1.52-.65H6.28v.01Z" />
                            <path
                                d="M16.25 22.75a2 2 0 1 1 0-4 2 2 0 0 1 0 4Zm-8 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4ZM21 8.75H9a.75.75 0 0 1 0-1.5h12a.75.75 0 0 1 0 1.5Z" />
                        </svg>
                    </a>
                    <span class="w-2 text-center text-[24px] font-bold leading-none text-[#00286d]"
                        aria-hidden="true">•</span>
                    <a class="grid h-[34px] w-[34px] place-items-center rounded-[6px] border border-[#a5a5a5] transition-opacity duration-150 ease-in hover:opacity-70"
                        href="#" aria-label="حساب کاربری">
                        <svg class="block h-5 w-5 fill-black max-w-full" viewBox="0 0 20 20" aria-hidden="true">
                            <path
                                d="M10 1.54a4.29 4.29 0 1 1 0 8.58 4.29 4.29 0 0 1 0-8.58Zm0 10.83c4.11 0 7.28 2.76 7.28 5.96a.13.13 0 0 1-.25 0c0-3.25-3.27-5.71-7.03-5.71s-7.03 2.46-7.03 5.71a.13.13 0 0 1-.25 0c0-3.2 3.17-5.96 7.28-5.96Z" />
                        </svg>
                    </a>
                    <span class="w-2 text-center text-[24px] font-bold leading-none text-[#00286d]"
                        aria-hidden="true">•</span>
                    <a class="grid h-[34px] w-[34px] place-items-center rounded-[6px] border border-[#a5a5a5] transition-opacity duration-150 ease-in hover:opacity-70"
                        href="#" aria-label="جستجو">
                        <svg class="block h-5 w-5 fill-black max-w-full" viewBox="0 0 20 20" aria-hidden="true">
                            <path
                                d="M9.58 1.54a8.04 8.04 0 1 1 0 16.08 8.04 8.04 0 0 1 0-16.08Zm0 .25a7.79 7.79 0 1 0 0 15.58 7.79 7.79 0 0 0 0-15.58Z" />
                            <path d="m16.58 16.58 1.84 1.84a.13.13 0 0 1-.18.18l-1.84-1.84a.13.13 0 0 1 .18-.18Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </header>

        <main class="flex flex-col gap-16 mobile:gap-12">
            <section class="flex w-full flex-col gap-6" aria-label="اسلایدر تبلیغاتی">
                <div
                    class="relative w-full overflow-hidden rounded-[24px] bg-[#f8f5f0] shadow-[0_18px_48px_rgba(0,0,0,0.08)]">
                    <div id="promo-slider"
                        class="flex h-[674px] w-full snap-x snap-mandatory overflow-x-auto overflow-y-hidden scroll-smooth [direction:ltr] [scrollbar-width:none] nav:h-[420px] mobile:h-[260px] [&::-webkit-scrollbar]:hidden">
                        <article id="promo-slide-1" class="h-full min-w-full flex-[0_0_100%] snap-start">
                            <img class="block h-full w-full object-cover max-w-full" src="uploads/slide-1.png"
                                alt="پیشنهاد ویژه کفش ملی" />
                        </article>
                        <article id="promo-slide-2" class="h-full min-w-full flex-[0_0_100%] snap-start">
                            <img class="block h-full w-full object-cover max-w-full" src="uploads/slide-2.png"
                                alt="جدیدترین محصولات کفش ملی" />
                        </article>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-x-6 top-1/2 flex -translate-y-1/2 items-center justify-between [direction:ltr] mobile:inset-x-3">
                        <a class="pointer-events-auto grid h-11 w-11 place-items-center rounded-full bg-white/90 text-[28px] leading-none text-[#00286d] shadow-[0_8px_22px_rgba(0,0,0,0.14)] transition-opacity duration-150 ease-in hover:opacity-80 mobile:h-9 mobile:w-9 mobile:text-[22px]"
                            href="#promo-slide-1" aria-label="اسلاید قبلی">‹</a>
                        <a class="pointer-events-auto grid h-11 w-11 place-items-center rounded-full bg-white/90 text-[28px] leading-none text-[#00286d] shadow-[0_8px_22px_rgba(0,0,0,0.14)] transition-opacity duration-150 ease-in hover:opacity-80 mobile:h-9 mobile:w-9 mobile:text-[22px]"
                            href="#promo-slide-2" aria-label="اسلاید بعدی">›</a>
                    </div>
                </div>
            </section>

            <section class="mx-auto flex w-full max-w-[1440px] flex-col gap-14 px-[60px] mobile:gap-7 mobile:px-5"
                id="offers" aria-labelledby="offers-title">
                <div class="flex items-center justify-between gap-6">
                    <h2 id="offers-title"
                        class="m-0 text-[48px] font-bold leading-[48px] tracking-[-1.44px] text-black mobile:text-[34px] mobile:leading-10">
                        پیشنهادهای ویژه</h2>
                    <a href="#"
                        class="flex items-center gap-0.5 text-[16px] leading-[22px] tracking-[-0.48px] transition-opacity duration-150 ease-in hover:opacity-70">همه
                        موارد <span class="text-[28px] leading-5" aria-hidden="true">›</span></a>
                </div>
                <div
                    class="flex items-center gap-6 overflow-x-auto pb-2 [direction:rtl] [scroll-snap-type:x_mandatory]">
                    <?php
                    $query = $db->query('SELECT * FROM products');
                    $data = $query->fetchAll();
                    $index = 0;
                    foreach ($data as $item) {
                        if ($index == 4) {
                            break;
                        }
                        $index++;
                        ?>
                        <article class="w-[312px] flex-[0_0_312px] [direction:rtl] [scroll-snap-align:start]">
                            <figure
                                class="relative m-0 h-[312px] overflow-hidden rounded-t-[12px] border border-b-0 border-[rgba(165,165,165,0.5)] bg-[#f8f5f0]">
                                <div
                                    class="absolute left-1/2 top-1/2 h-[206px] w-64 -translate-x-1/2 -translate-y-1/2 overflow-hidden">
                                    <img class="absolute inset-0 h-full w-full object-cover"
                                        src="<?php echo $item['image']; ?>" alt="کفش روزمره کودک" />
                                </div><label
                                    class="absolute left-4 top-4 z-10 grid h-8 w-8 cursor-pointer place-items-center rounded-[6px] bg-white transition-colors duration-150 ease-in hover:bg-[#f6f6f6]"><input
                                        class="peer absolute opacity-0 pointer-events-none" type="checkbox" /><span
                                        class="before:text-[26px] before:leading-none before:text-[#242424] before:content-['♡'] peer-checked:before:text-[#ff383c] peer-checked:before:content-['♥']"></span></label>
                            </figure>
                            <div
                                class="flex h-[157px] flex-col items-start gap-2 rounded-b-[12px] border border-t-0 border-[rgba(165,165,165,0.5)] bg-white p-4 text-right">
                                <div class="self-start text-[20px] leading-[19px] tracking-[2px] text-[#ffc633] [direction:ltr]"
                                    aria-label="۵ ستاره">★★★★★</div>
                                <h3 class="mt-1 text-[20px] font-bold leading-[30px] tracking-[-0.6px] text-black">
                                    <?php echo $item['name']; ?>
                                </h3>
                                <p class="text-[16px] leading-[22px] tracking-[-0.48px] text-black">
                                    <?php echo $item['brand']; ?>
                                </p>
                                <p
                                    class="flex flex-row-reverse gap-2 whitespace-nowrap text-[16px] leading-[22px] tracking-[-0.48px] text-black">
                                    <strong class="font-bold"><? echo number_format($item['price']); ?> تومان</strong>
                                </p>
                            </div>
                        </article>
                        <?php

                    }
                    ?>
                </div>
            </section>

            <section class="mx-auto flex w-full max-w-[1440px] flex-col gap-14 px-[60px] mobile:gap-7 mobile:px-5"
                aria-labelledby="new-title">
                <div class="flex items-center justify-between gap-6">
                    <h2 id="new-title"
                        class="m-0 text-[48px] font-bold leading-[48px] tracking-[-1.44px] text-black mobile:text-[34px] mobile:leading-10">
                        جدیدترین‌ها</h2><a href="#"
                        class="flex items-center gap-0.5 text-[16px] leading-[22px] tracking-[-0.48px] transition-opacity duration-150 ease-in hover:opacity-70">همه
                        موارد <span class="text-[28px] leading-5" aria-hidden="true">›</span></a>
                </div>
                <div
                    class="flex items-center gap-6 overflow-x-auto pb-2 [direction:rtl] [scroll-snap-type:x_mandatory]">
                    <article class="w-[312px] flex-[0_0_312px] [direction:rtl] [scroll-snap-align:start]">
                        <figure
                            class="relative m-0 h-[312px] overflow-hidden rounded-t-[12px] border border-b-0 border-[rgba(165,165,165,0.5)] bg-[#f8f5f0]">
                            <div
                                class="absolute left-1/2 top-1/2 h-[206px] w-64 -translate-x-1/2 -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[140.32%] w-[113.06%] left-[-7.01%] top-[-20.16%]"
                                    src="uploads/2.png" alt="پوتین ایمنی" />
                            </div><label
                                class="absolute left-4 top-4 z-10 grid h-8 w-8 cursor-pointer place-items-center rounded-[6px] bg-white transition-colors duration-150 ease-in hover:bg-[#f6f6f6]"><input
                                    class="peer absolute opacity-0 pointer-events-none" type="checkbox" /><span
                                    class="before:text-[26px] before:leading-none before:text-[#242424] before:content-['♡'] peer-checked:before:text-[#ff383c] peer-checked:before:content-['♥']"></span></label>
                        </figure>
                        <div
                            class="flex h-[157px] flex-col items-start gap-2 rounded-b-[12px] border border-t-0 border-[rgba(165,165,165,0.5)] bg-white p-4 text-right">
                            <div
                                class="self-start text-[20px] leading-[19px] tracking-[2px] text-[#ffc633] [direction:ltr]">
                                ★★★★★
                            </div>
                            <h3 class="mt-1 text-[20px] font-bold leading-[30px] tracking-[-0.6px] text-black">پوتین
                                ایمنی</h3>
                            <p class="text-[16px] leading-[22px] tracking-[-0.48px] text-black">نایک</p>
                            <p
                                class="flex flex-row-reverse gap-2 whitespace-nowrap text-[16px] leading-[22px] tracking-[-0.48px] text-black">
                                <strong class="font-bold">3,800,000 تومان</strong>
                            </p>
                        </div>
                    </article>
                    <article class="w-[312px] flex-[0_0_312px] [direction:rtl] [scroll-snap-align:start]">
                        <figure
                            class="relative m-0 h-[312px] overflow-hidden rounded-t-[12px] border border-b-0 border-[rgba(165,165,165,0.5)] bg-[#f8f5f0]">
                            <div
                                class="absolute left-1/2 top-1/2 h-[206px] w-64 -translate-x-1/2 -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[140.32%] w-[113.06%] left-[-7.01%] top-[-20.16%]"
                                    src="uploads/2.png" alt="پوتین ایمنی" />
                            </div><label
                                class="absolute left-4 top-4 z-10 grid h-8 w-8 cursor-pointer place-items-center rounded-[6px] bg-white transition-colors duration-150 ease-in hover:bg-[#f6f6f6]"><input
                                    class="peer absolute opacity-0 pointer-events-none" type="checkbox" checked /><span
                                    class="before:text-[26px] before:leading-none before:text-[#242424] before:content-['♡'] peer-checked:before:text-[#ff383c] peer-checked:before:content-['♥']"></span></label>
                        </figure>
                        <div
                            class="flex h-[157px] flex-col items-start gap-2 rounded-b-[12px] border border-t-0 border-[rgba(165,165,165,0.5)] bg-white p-4 text-right">
                            <div
                                class="self-start text-[20px] leading-[19px] tracking-[2px] text-[#ffc633] [direction:ltr]">
                                ★★★★★
                            </div>
                            <h3 class="mt-1 text-[20px] font-bold leading-[30px] tracking-[-0.6px] text-black">پوتین
                                ایمنی</h3>
                            <p class="text-[16px] leading-[22px] tracking-[-0.48px] text-black">نایک</p>
                            <p
                                class="flex flex-row-reverse gap-2 whitespace-nowrap text-[16px] leading-[22px] tracking-[-0.48px] text-black">
                                <strong class="font-bold">3,800,000 تومان</strong>
                            </p>
                        </div>
                    </article>
                    <article class="w-[312px] flex-[0_0_312px] [direction:rtl] [scroll-snap-align:start]">
                        <figure
                            class="relative m-0 h-[312px] overflow-hidden rounded-t-[12px] border border-b-0 border-[rgba(165,165,165,0.5)] bg-[#f8f5f0]">
                            <div
                                class="absolute left-1/2 top-1/2 h-[206px] w-64 -translate-x-1/2 -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[133.93%] w-[159.57%] left-[-33.24%] top-[-12.05%]"
                                    src="uploads/1.png" alt="کیف" />
                            </div><label
                                class="absolute left-4 top-4 z-10 grid h-8 w-8 cursor-pointer place-items-center rounded-[6px] bg-white transition-colors duration-150 ease-in hover:bg-[#f6f6f6]"><input
                                    class="peer absolute opacity-0 pointer-events-none" type="checkbox" /><span
                                    class="before:text-[26px] before:leading-none before:text-[#242424] before:content-['♡'] peer-checked:before:text-[#ff383c] peer-checked:before:content-['♥']"></span></label>
                        </figure>
                        <div
                            class="flex h-[157px] flex-col items-start gap-2 rounded-b-[12px] border border-t-0 border-[rgba(165,165,165,0.5)] bg-white p-4 text-right">
                            <div
                                class="self-start text-[20px] leading-[19px] tracking-[2px] text-[#ffc633] [direction:ltr]">
                                ★★★★★
                            </div>
                            <h3 class="mt-1 text-[20px] font-bold leading-[30px] tracking-[-0.6px] text-black">کیف</h3>
                            <p class="text-[16px] leading-[22px] tracking-[-0.48px] text-black">لویی ویتون</p>
                            <p
                                class="flex flex-row-reverse gap-2 whitespace-nowrap text-[16px] leading-[22px] tracking-[-0.48px] text-black">
                                <del class="text-[#a5a5a5] no-underline">21,000,000 تومان</del><strong
                                    class="font-bold">20,600,000
                                    تومان</strong>
                            </p>
                        </div>
                    </article>
                    <article class="w-[312px] flex-[0_0_312px] [direction:rtl] [scroll-snap-align:start]">
                        <figure
                            class="relative m-0 h-[312px] overflow-hidden rounded-t-[12px] border border-b-0 border-[rgba(165,165,165,0.5)] bg-[#f8f5f0]">
                            <div
                                class="absolute left-1/2 top-1/2 h-[206px] w-64 -translate-x-1/2 -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[170.9%] w-[146.79%] left-[-25.64%] top-[-33.58%]"
                                    src="uploads/4.png" alt="کفش روزمره کودک" />
                            </div><label
                                class="absolute left-4 top-4 z-10 grid h-8 w-8 cursor-pointer place-items-center rounded-[6px] bg-white transition-colors duration-150 ease-in hover:bg-[#f6f6f6]"><input
                                    class="peer absolute opacity-0 pointer-events-none" type="checkbox" checked /><span
                                    class="before:text-[26px] before:leading-none before:text-[#242424] before:content-['♡'] peer-checked:before:text-[#ff383c] peer-checked:before:content-['♥']"></span></label>
                        </figure>
                        <div
                            class="flex h-[157px] flex-col items-start gap-2 rounded-b-[12px] border border-t-0 border-[rgba(165,165,165,0.5)] bg-white p-4 text-right">
                            <div
                                class="self-start text-[20px] leading-[19px] tracking-[2px] text-[#ffc633] [direction:ltr]">
                                ★★★★★
                            </div>
                            <h3 class="mt-1 text-[20px] font-bold leading-[30px] tracking-[-0.6px] text-black">کفش
                                روزمره کودک</h3>
                            <p class="text-[16px] leading-[22px] tracking-[-0.48px] text-black">نایک</p>
                            <p
                                class="flex flex-row-reverse gap-2 whitespace-nowrap text-[16px] leading-[22px] tracking-[-0.48px] text-black">
                                <strong class="font-bold">4,000,000 تومان</strong>
                            </p>
                        </div>
                    </article>
                    <article class="w-[312px] flex-[0_0_312px] [direction:rtl] [scroll-snap-align:start]">
                        <figure
                            class="relative m-0 h-[312px] overflow-hidden rounded-t-[12px] border border-b-0 border-[rgba(165,165,165,0.5)] bg-[#f8f5f0]">
                            <div
                                class="absolute left-1/2 top-1/2 h-[206px] w-64 -translate-x-1/2 -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[147.5%] w-[132.37%] left-[-15.06%] top-[-23.93%]"
                                    src="uploads/5.png" alt="کفش مجلسی" />
                            </div><label
                                class="absolute left-4 top-4 z-10 grid h-8 w-8 cursor-pointer place-items-center rounded-[6px] bg-white transition-colors duration-150 ease-in hover:bg-[#f6f6f6]"><input
                                    class="peer absolute opacity-0 pointer-events-none" type="checkbox" /><span
                                    class="before:text-[26px] before:leading-none before:text-[#242424] before:content-['♡'] peer-checked:before:text-[#ff383c] peer-checked:before:content-['♥']"></span></label>
                        </figure>
                        <div
                            class="flex h-[157px] flex-col items-start gap-2 rounded-b-[12px] border border-t-0 border-[rgba(165,165,165,0.5)] bg-white p-4 text-right">
                            <div
                                class="self-start text-[20px] leading-[19px] tracking-[2px] text-[#ffc633] [direction:ltr]">
                                ★★★★★
                            </div>
                            <h3 class="mt-1 text-[20px] font-bold leading-[30px] tracking-[-0.6px] text-black">کفش مجلسی
                            </h3>
                            <p class="text-[16px] leading-[22px] tracking-[-0.48px] text-black">آدیداس</p>
                            <p
                                class="flex flex-row-reverse gap-2 whitespace-nowrap text-[16px] leading-[22px] tracking-[-0.48px] text-black">
                                <del class="text-[#a5a5a5] no-underline">2,000,000 تومان</del><strong
                                    class="font-bold">1,000,000
                                    تومان</strong>
                            </p>
                        </div>
                    </article>
                </div>
            </section>

            <section class="px-[60px] mobile:px-5" aria-labelledby="category-title">
                <div
                    class="mx-auto flex max-w-[1320px] flex-col gap-11 rounded-[24px] bg-[#f8f5f0] px-[88px] pb-[82px] pt-[84px] mobile:px-5 mobile:py-10">
                    <h2 id="category-title"
                        class="m-0 text-[48px] font-bold leading-[48px] tracking-[-1.44px] text-[#00286d] mobile:text-[34px] mobile:leading-10">
                        دسته‌بندی محصولات</h2>
                    <div class="flex flex-wrap items-start justify-center gap-6">
                        <a class="relative h-[292px] w-[448px] overflow-hidden rounded-[12px] bg-white transition-opacity duration-150 ease-in hover:opacity-95 nav:w-full mobile:h-[260px]"
                            href="#"><span
                                class="absolute right-8 top-8 z-10 text-[32px] font-bold leading-9 tracking-[-0.96px]">بچگانه</span>
                            <div class="absolute left-8 top-1/2 h-[260px] w-[303px] -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[170.9%] w-[146.79%] left-[-25.64%] top-[-33.58%]"
                                    src="uploads/4.png" alt="" />
                            </div>
                        </a>
                        <a class="relative h-[292px] w-[672px] overflow-hidden rounded-[12px] bg-white transition-opacity duration-150 ease-in hover:opacity-95 nav:w-full mobile:h-[260px]"
                            href="#"><span
                                class="absolute right-8 top-8 z-10 text-[32px] font-bold leading-9 tracking-[-0.96px]">مردانه</span>
                            <div class="absolute left-8 top-1/2 h-[260px] w-[323px] -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[140.32%] w-[113.06%] left-[-7.01%] top-[-20.16%]"
                                    src="uploads/2.png" alt="" />
                            </div>
                        </a>
                        <a class="relative h-[292px] w-[672px] overflow-hidden rounded-[12px] bg-white transition-opacity duration-150 ease-in hover:opacity-95 nav:w-full mobile:h-[260px]"
                            href="#"><span
                                class="absolute right-8 top-8 z-10 text-[32px] font-bold leading-9 tracking-[-0.96px]">زنانه</span>
                            <div class="absolute left-8 top-1/2 h-[260px] w-[290px] -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[147.5%] w-[132.37%] left-[-15.06%] top-[-23.93%]"
                                    src="uploads/5.png" alt="" />
                            </div>
                        </a>
                        <a class="relative h-[292px] w-[448px] overflow-hidden rounded-[12px] bg-white transition-opacity duration-150 ease-in hover:opacity-95 nav:w-full mobile:h-[260px]"
                            href="#"><span
                                class="absolute right-8 top-8 z-10 text-[32px] font-bold leading-9 tracking-[-0.96px]">کیف</span>
                            <div
                                class="absolute left-[7px] top-1/2 h-[260px] w-[218px] -translate-y-1/2 rotate-[12.33deg] overflow-hidden">
                                <img class="absolute block max-w-none h-[133.93%] w-[159.57%] left-[-33.24%] top-[-12.05%]"
                                    src="uploads/1.png" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="mx-auto flex w-full max-w-[1440px] flex-col gap-14 px-[60px] mobile:gap-7 mobile:px-5"
                aria-labelledby="safety-title">
                <div class="flex items-center justify-between gap-6">
                    <h2 id="safety-title"
                        class="m-0 text-[48px] font-bold leading-[48px] tracking-[-1.44px] text-black mobile:text-[34px] mobile:leading-10">
                        کفش ایمنی</h2><a href="#"
                        class="flex items-center gap-0.5 text-[16px] leading-[22px] tracking-[-0.48px] transition-opacity duration-150 ease-in hover:opacity-70">همه
                        موارد <span class="text-[28px] leading-5" aria-hidden="true">›</span></a>
                </div>
                <div
                    class="flex items-center gap-6 overflow-x-auto pb-2 [direction:rtl] [scroll-snap-type:x_mandatory]">
                    <article class="w-[312px] flex-[0_0_312px] [direction:rtl] [scroll-snap-align:start]">
                        <figure
                            class="relative m-0 h-[312px] overflow-hidden rounded-t-[12px] border border-b-0 border-[rgba(165,165,165,0.5)] bg-[#f8f5f0]">
                            <div
                                class="absolute left-1/2 top-1/2 h-[206px] w-64 -translate-x-1/2 -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[140.32%] w-[113.06%] left-[-7.01%] top-[-20.16%]"
                                    src="uploads/2.png" alt="پوتین ایمنی" />
                            </div><label
                                class="absolute left-4 top-4 z-10 grid h-8 w-8 cursor-pointer place-items-center rounded-[6px] bg-white transition-colors duration-150 ease-in hover:bg-[#f6f6f6]"><input
                                    class="peer absolute opacity-0 pointer-events-none" type="checkbox" /><span
                                    class="before:text-[26px] before:leading-none before:text-[#242424] before:content-['♡'] peer-checked:before:text-[#ff383c] peer-checked:before:content-['♥']"></span></label>
                        </figure>
                        <div
                            class="flex h-[157px] flex-col items-start gap-2 rounded-b-[12px] border border-t-0 border-[rgba(165,165,165,0.5)] bg-white p-4 text-right">
                            <div
                                class="self-start text-[20px] leading-[19px] tracking-[2px] text-[#ffc633] [direction:ltr]">
                                ★★★★★
                            </div>
                            <h3 class="mt-1 text-[20px] font-bold leading-[30px] tracking-[-0.6px] text-black">پوتین
                                ایمنی</h3>
                            <p class="text-[16px] leading-[22px] tracking-[-0.48px] text-black">نایک</p>
                            <p
                                class="flex flex-row-reverse gap-2 whitespace-nowrap text-[16px] leading-[22px] tracking-[-0.48px] text-black">
                                <strong class="font-bold">3,800,000 تومان</strong>
                            </p>
                        </div>
                    </article>
                    <article class="w-[312px] flex-[0_0_312px] [direction:rtl] [scroll-snap-align:start]">
                        <figure
                            class="relative m-0 h-[312px] overflow-hidden rounded-t-[12px] border border-b-0 border-[rgba(165,165,165,0.5)] bg-[#f8f5f0]">
                            <div
                                class="absolute left-1/2 top-1/2 h-[206px] w-64 -translate-x-1/2 -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[140.32%] w-[113.06%] left-[-7.01%] top-[-20.16%]"
                                    src="uploads/2.png" alt="پوتین ایمنی" />
                            </div><label
                                class="absolute left-4 top-4 z-10 grid h-8 w-8 cursor-pointer place-items-center rounded-[6px] bg-white transition-colors duration-150 ease-in hover:bg-[#f6f6f6]"><input
                                    class="peer absolute opacity-0 pointer-events-none" type="checkbox" checked /><span
                                    class="before:text-[26px] before:leading-none before:text-[#242424] before:content-['♡'] peer-checked:before:text-[#ff383c] peer-checked:before:content-['♥']"></span></label>
                        </figure>
                        <div
                            class="flex h-[157px] flex-col items-start gap-2 rounded-b-[12px] border border-t-0 border-[rgba(165,165,165,0.5)] bg-white p-4 text-right">
                            <div
                                class="self-start text-[20px] leading-[19px] tracking-[2px] text-[#ffc633] [direction:ltr]">
                                ★★★★★
                            </div>
                            <h3 class="mt-1 text-[20px] font-bold leading-[30px] tracking-[-0.6px] text-black">پوتین
                                ایمنی</h3>
                            <p class="text-[16px] leading-[22px] tracking-[-0.48px] text-black">نایک</p>
                            <p
                                class="flex flex-row-reverse gap-2 whitespace-nowrap text-[16px] leading-[22px] tracking-[-0.48px] text-black">
                                <strong class="font-bold">3,800,000 تومان</strong>
                            </p>
                        </div>
                    </article>
                    <article class="w-[312px] flex-[0_0_312px] [direction:rtl] [scroll-snap-align:start]">
                        <figure
                            class="relative m-0 h-[312px] overflow-hidden rounded-t-[12px] border border-b-0 border-[rgba(165,165,165,0.5)] bg-[#f8f5f0]">
                            <div
                                class="absolute left-1/2 top-1/2 h-[206px] w-64 -translate-x-1/2 -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[170.9%] w-[146.79%] left-[-25.64%] top-[-33.58%]"
                                    src="uploads/4.png" alt="کفش روزمره کودک" />
                            </div><label
                                class="absolute left-4 top-4 z-10 grid h-8 w-8 cursor-pointer place-items-center rounded-[6px] bg-white transition-colors duration-150 ease-in hover:bg-[#f6f6f6]"><input
                                    class="peer absolute opacity-0 pointer-events-none" type="checkbox" /><span
                                    class="before:text-[26px] before:leading-none before:text-[#242424] before:content-['♡'] peer-checked:before:text-[#ff383c] peer-checked:before:content-['♥']"></span></label>
                        </figure>
                        <div
                            class="flex h-[157px] flex-col items-start gap-2 rounded-b-[12px] border border-t-0 border-[rgba(165,165,165,0.5)] bg-white p-4 text-right">
                            <div
                                class="self-start text-[20px] leading-[19px] tracking-[2px] text-[#ffc633] [direction:ltr]">
                                ★★★★★
                            </div>
                            <h3 class="mt-1 text-[20px] font-bold leading-[30px] tracking-[-0.6px] text-black">کفش
                                روزمره کودک</h3>
                            <p class="text-[16px] leading-[22px] tracking-[-0.48px] text-black">نایک</p>
                            <p
                                class="flex flex-row-reverse gap-2 whitespace-nowrap text-[16px] leading-[22px] tracking-[-0.48px] text-black">
                                <strong class="font-bold">4,000,000 تومان</strong>
                            </p>
                        </div>
                    </article>
                    <article class="w-[312px] flex-[0_0_312px] [direction:rtl] [scroll-snap-align:start]">
                        <figure
                            class="relative m-0 h-[312px] overflow-hidden rounded-t-[12px] border border-b-0 border-[rgba(165,165,165,0.5)] bg-[#f8f5f0]">
                            <div
                                class="absolute left-1/2 top-1/2 h-[206px] w-64 -translate-x-1/2 -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[147.5%] w-[132.37%] left-[-15.06%] top-[-23.93%]"
                                    src="uploads/5.png" alt="کفش مجلسی" />
                            </div><label
                                class="absolute left-4 top-4 z-10 grid h-8 w-8 cursor-pointer place-items-center rounded-[6px] bg-white transition-colors duration-150 ease-in hover:bg-[#f6f6f6]"><input
                                    class="peer absolute opacity-0 pointer-events-none" type="checkbox" checked /><span
                                    class="before:text-[26px] before:leading-none before:text-[#242424] before:content-['♡'] peer-checked:before:text-[#ff383c] peer-checked:before:content-['♥']"></span></label>
                        </figure>
                        <div
                            class="flex h-[157px] flex-col items-start gap-2 rounded-b-[12px] border border-t-0 border-[rgba(165,165,165,0.5)] bg-white p-4 text-right">
                            <div
                                class="self-start text-[20px] leading-[19px] tracking-[2px] text-[#ffc633] [direction:ltr]">
                                ★★★★★
                            </div>
                            <h3 class="mt-1 text-[20px] font-bold leading-[30px] tracking-[-0.6px] text-black">کفش مجلسی
                            </h3>
                            <p class="text-[16px] leading-[22px] tracking-[-0.48px] text-black">آدیداس</p>
                            <p
                                class="flex flex-row-reverse gap-2 whitespace-nowrap text-[16px] leading-[22px] tracking-[-0.48px] text-black">
                                <del class="text-[#a5a5a5] no-underline">2,000,000 تومان</del><strong
                                    class="font-bold">1,000,000
                                    تومان</strong>
                            </p>
                        </div>
                    </article>
                </div>
            </section>

            <section class="mx-auto flex w-full max-w-[1440px] flex-col gap-14 px-[60px] mobile:gap-7 mobile:px-5"
                aria-labelledby="bags-title">
                <div class="flex items-center justify-between gap-6">
                    <h2 id="bags-title"
                        class="m-0 text-[48px] font-bold leading-[48px] tracking-[-1.44px] text-black mobile:text-[34px] mobile:leading-10">
                        کیف زنانه</h2><a href="#"
                        class="flex items-center gap-0.5 text-[16px] leading-[22px] tracking-[-0.48px] transition-opacity duration-150 ease-in hover:opacity-70">همه
                        موارد <span class="text-[28px] leading-5" aria-hidden="true">›</span></a>
                </div>
                <div
                    class="flex items-center gap-6 overflow-x-auto pb-2 [direction:rtl] [scroll-snap-type:x_mandatory]">
                    <article class="w-[312px] flex-[0_0_312px] [direction:rtl] [scroll-snap-align:start]">
                        <figure
                            class="relative m-0 h-[312px] overflow-hidden rounded-t-[12px] border border-b-0 border-[rgba(165,165,165,0.5)] bg-[#f8f5f0]">
                            <div
                                class="absolute left-1/2 top-1/2 h-[206px] w-64 -translate-x-1/2 -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[133.93%] w-[159.57%] left-[-33.24%] top-[-12.05%]"
                                    src="uploads/1.png" alt="کیف زنانه" />
                            </div><label
                                class="absolute left-4 top-4 z-10 grid h-8 w-8 cursor-pointer place-items-center rounded-[6px] bg-white transition-colors duration-150 ease-in hover:bg-[#f6f6f6]"><input
                                    class="peer absolute opacity-0 pointer-events-none" type="checkbox" /><span
                                    class="before:text-[26px] before:leading-none before:text-[#242424] before:content-['♡'] peer-checked:before:text-[#ff383c] peer-checked:before:content-['♥']"></span></label>
                        </figure>
                        <div
                            class="flex h-[157px] flex-col items-start gap-2 rounded-b-[12px] border border-t-0 border-[rgba(165,165,165,0.5)] bg-white p-4 text-right">
                            <div
                                class="self-start text-[20px] leading-[19px] tracking-[2px] text-[#ffc633] [direction:ltr]">
                                ★★★★★
                            </div>
                            <h3 class="mt-1 text-[20px] font-bold leading-[30px] tracking-[-0.6px] text-black">کیف</h3>
                            <p class="text-[16px] leading-[22px] tracking-[-0.48px] text-black">لویی ویتون</p>
                            <p
                                class="flex flex-row-reverse gap-2 whitespace-nowrap text-[16px] leading-[22px] tracking-[-0.48px] text-black">
                                <del class="text-[#a5a5a5] no-underline">21,000,000 تومان</del><strong
                                    class="font-bold">20,600,000
                                    تومان</strong>
                            </p>
                        </div>
                    </article>
                    <article class="w-[312px] flex-[0_0_312px] [direction:rtl] [scroll-snap-align:start]">
                        <figure
                            class="relative m-0 h-[312px] overflow-hidden rounded-t-[12px] border border-b-0 border-[rgba(165,165,165,0.5)] bg-[#f8f5f0]">
                            <div
                                class="absolute left-1/2 top-1/2 h-[206px] w-64 -translate-x-1/2 -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[133.93%] w-[159.57%] left-[-33.24%] top-[-12.05%]"
                                    src="uploads/1.png" alt="کیف زنانه" />
                            </div><label
                                class="absolute left-4 top-4 z-10 grid h-8 w-8 cursor-pointer place-items-center rounded-[6px] bg-white transition-colors duration-150 ease-in hover:bg-[#f6f6f6]"><input
                                    class="peer absolute opacity-0 pointer-events-none" type="checkbox" checked /><span
                                    class="before:text-[26px] before:leading-none before:text-[#242424] before:content-['♡'] peer-checked:before:text-[#ff383c] peer-checked:before:content-['♥']"></span></label>
                        </figure>
                        <div
                            class="flex h-[157px] flex-col items-start gap-2 rounded-b-[12px] border border-t-0 border-[rgba(165,165,165,0.5)] bg-white p-4 text-right">
                            <div
                                class="self-start text-[20px] leading-[19px] tracking-[2px] text-[#ffc633] [direction:ltr]">
                                ★★★★★
                            </div>
                            <h3 class="mt-1 text-[20px] font-bold leading-[30px] tracking-[-0.6px] text-black">کیف</h3>
                            <p class="text-[16px] leading-[22px] tracking-[-0.48px] text-black">لویی ویتون</p>
                            <p
                                class="flex flex-row-reverse gap-2 whitespace-nowrap text-[16px] leading-[22px] tracking-[-0.48px] text-black">
                                <del class="text-[#a5a5a5] no-underline">21,000,000 تومان</del><strong
                                    class="font-bold">20,600,000
                                    تومان</strong>
                            </p>
                        </div>
                    </article>
                    <article class="w-[312px] flex-[0_0_312px] [direction:rtl] [scroll-snap-align:start]">
                        <figure
                            class="relative m-0 h-[312px] overflow-hidden rounded-t-[12px] border border-b-0 border-[rgba(165,165,165,0.5)] bg-[#f8f5f0]">
                            <div
                                class="absolute left-1/2 top-1/2 h-[206px] w-64 -translate-x-1/2 -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[133.93%] w-[159.57%] left-[-33.24%] top-[-12.05%]"
                                    src="uploads/1.png" alt="کیف زنانه" />
                            </div><label
                                class="absolute left-4 top-4 z-10 grid h-8 w-8 cursor-pointer place-items-center rounded-[6px] bg-white transition-colors duration-150 ease-in hover:bg-[#f6f6f6]"><input
                                    class="peer absolute opacity-0 pointer-events-none" type="checkbox" /><span
                                    class="before:text-[26px] before:leading-none before:text-[#242424] before:content-['♡'] peer-checked:before:text-[#ff383c] peer-checked:before:content-['♥']"></span></label>
                        </figure>
                        <div
                            class="flex h-[157px] flex-col items-start gap-2 rounded-b-[12px] border border-t-0 border-[rgba(165,165,165,0.5)] bg-white p-4 text-right">
                            <div
                                class="self-start text-[20px] leading-[19px] tracking-[2px] text-[#ffc633] [direction:ltr]">
                                ★★★★★
                            </div>
                            <h3 class="mt-1 text-[20px] font-bold leading-[30px] tracking-[-0.6px] text-black">کیف</h3>
                            <p class="text-[16px] leading-[22px] tracking-[-0.48px] text-black">لویی ویتون</p>
                            <p
                                class="flex flex-row-reverse gap-2 whitespace-nowrap text-[16px] leading-[22px] tracking-[-0.48px] text-black">
                                <del class="text-[#a5a5a5] no-underline">21,000,000 تومان</del><strong
                                    class="font-bold">20,600,000
                                    تومان</strong>
                            </p>
                        </div>
                    </article>
                    <article class="w-[312px] flex-[0_0_312px] [direction:rtl] [scroll-snap-align:start]">
                        <figure
                            class="relative m-0 h-[312px] overflow-hidden rounded-t-[12px] border border-b-0 border-[rgba(165,165,165,0.5)] bg-[#f8f5f0]">
                            <div
                                class="absolute left-1/2 top-1/2 h-[206px] w-64 -translate-x-1/2 -translate-y-1/2 overflow-hidden">
                                <img class="absolute block max-w-none h-[133.93%] w-[159.57%] left-[-33.24%] top-[-12.05%]"
                                    src="uploads/1.png" alt="کیف زنانه" />
                            </div><label
                                class="absolute left-4 top-4 z-10 grid h-8 w-8 cursor-pointer place-items-center rounded-[6px] bg-white transition-colors duration-150 ease-in hover:bg-[#f6f6f6]"><input
                                    class="peer absolute opacity-0 pointer-events-none" type="checkbox" checked /><span
                                    class="before:text-[26px] before:leading-none before:text-[#242424] before:content-['♡'] peer-checked:before:text-[#ff383c] peer-checked:before:content-['♥']"></span></label>
                        </figure>
                        <div
                            class="flex h-[157px] flex-col items-start gap-2 rounded-b-[12px] border border-t-0 border-[rgba(165,165,165,0.5)] bg-white p-4 text-right">
                            <div
                                class="self-start text-[20px] leading-[19px] tracking-[2px] text-[#ffc633] [direction:ltr]">
                                ★★★★★
                            </div>
                            <h3 class="mt-1 text-[20px] font-bold leading-[30px] tracking-[-0.6px] text-black">کیف</h3>
                            <p class="text-[16px] leading-[22px] tracking-[-0.48px] text-black">لویی ویتون</p>
                            <p
                                class="flex flex-row-reverse gap-2 whitespace-nowrap text-[16px] leading-[22px] tracking-[-0.48px] text-black">
                                <del class="text-[#a5a5a5] no-underline">21,000,000 تومان</del><strong
                                    class="font-bold">20,600,000
                                    تومان</strong>
                            </p>
                        </div>
                    </article>
                </div>
            </section>

            <section class="mx-auto flex w-full max-w-[1440px] flex-col gap-12 overflow-hidden py-16"
                aria-labelledby="reviews-title">
                <h2 id="reviews-title"
                    class="m-0 px-[60px] text-[48px] font-bold leading-[48px] tracking-[-1.44px] text-black mobile:px-5 mobile:text-[34px] mobile:leading-10">
                    نظر مشتریان</h2>
                <div class="flex items-center gap-6 overflow-x-auto px-[60px] pb-2 [direction:rtl] mobile:px-5">
                    <article
                        class="flex h-[284px] w-[400px] flex-[0_0_400px] flex-col items-start gap-6 rounded-[20px] border border-[rgba(0,0,0,0.1)] px-8 py-7 blur-[2px] [direction:rtl]">
                        <div class="self-start text-[24px] leading-6 tracking-[2px] text-[#ffc633] [direction:ltr]">
                            ★★★★★</div>
                        <h3
                            class="flex items-center gap-1 self-start text-[16px] font-bold leading-[22px] tracking-[-0.48px] text-black">
                            <span
                                class="grid h-6 w-6 place-items-center rounded-full bg-[#01ab31] text-[15px] text-white">✓</span>سارا
                            محمدی
                        </h3>
                        <p class="text-right text-[16px] leading-[22px] tracking-[-0.48px] text-[rgba(0,0,0,0.6)]">کیفیت
                            کفش‌ها
                            فوق‌العاده است. بعد از یک سال استفاده هنوز مثل روز اول به نظر می‌رسند.</p>
                    </article>
                    <article
                        class="flex h-[284px] w-[400px] flex-[0_0_400px] flex-col items-start gap-6 rounded-[20px] border border-[rgba(0,0,0,0.1)] px-8 py-7 [direction:rtl]">
                        <div class="self-start text-[24px] leading-6 tracking-[2px] text-[#ffc633] [direction:ltr]">
                            ★★★★★</div>
                        <h3
                            class="flex items-center gap-1 self-start text-[16px] font-bold leading-[22px] tracking-[-0.48px] text-black">
                            <span
                                class="grid h-6 w-6 place-items-center rounded-full bg-[#01ab31] text-[15px] text-white">✓</span>علی
                            رضایی
                        </h3>
                        <p class="text-right text-[16px] leading-[22px] tracking-[-0.48px] text-[rgba(0,0,0,0.6)]">خرید
                            از کفش ملی
                            همیشه تجربه‌ای خوب بوده. ارسال سریع و کیفیت عالی.</p>
                    </article>
                    <article
                        class="flex h-[284px] w-[400px] flex-[0_0_400px] flex-col items-start gap-6 rounded-[20px] border border-[rgba(0,0,0,0.1)] px-8 py-7 [direction:rtl]">
                        <div class="self-start text-[24px] leading-6 tracking-[2px] text-[#ffc633] [direction:ltr]">
                            ★★★★★</div>
                        <h3
                            class="flex items-center gap-1 self-start text-[16px] font-bold leading-[22px] tracking-[-0.48px] text-black">
                            <span
                                class="grid h-6 w-6 place-items-center rounded-full bg-[#01ab31] text-[15px] text-white">✓</span>مریم
                            حسینی
                        </h3>
                        <p class="text-right text-[16px] leading-[22px] tracking-[-0.48px] text-[rgba(0,0,0,0.6)]">طراحی
                            مدرن و
                            کیفیت ساخت بسیار خوب. قیمت هم مناسب. پیشنهاد می‌کنم.</p>
                    </article>
                    <article
                        class="flex h-[284px] w-[400px] flex-[0_0_400px] flex-col items-start gap-6 rounded-[20px] border border-[rgba(0,0,0,0.1)] px-8 py-7 [direction:rtl]">
                        <div class="self-start text-[24px] leading-6 tracking-[2px] text-[#ffc633] [direction:ltr]">
                            ★★★★★</div>
                        <h3
                            class="flex items-center gap-1 self-start text-[16px] font-bold leading-[22px] tracking-[-0.48px] text-black">
                            <span
                                class="grid h-6 w-6 place-items-center rounded-full bg-[#01ab31] text-[15px] text-white">✓</span>ابوالفضل
                            سهرابی
                        </h3>
                        <p class="text-right text-[16px] leading-[22px] tracking-[-0.48px] text-[rgba(0,0,0,0.6)]">کفش
                            اسپرت ملی رو
                            برای پیاده‌روی خریدم. زیره بسیار منعطف و ضربه‌گیر عالی داره. روزی ۱۰ هزار قدم پیاده‌روی
                            می‌کنم و بعد دو
                            ماه استفاده هیچ اثری از فرسودگی نمی‌بینم.</p>
                    </article>
                    <article
                        class="flex h-[284px] w-[400px] flex-[0_0_400px] flex-col items-start gap-6 rounded-[20px] border border-[rgba(0,0,0,0.1)] px-8 py-7 blur-[2px] [direction:rtl]">
                        <div class="self-start text-[24px] leading-6 tracking-[2px] text-[#ffc633] [direction:ltr]">
                            ★★★★★</div>
                        <h3
                            class="flex items-center gap-1 self-start text-[16px] font-bold leading-[22px] tracking-[-0.48px] text-black">
                            <span
                                class="grid h-6 w-6 place-items-center rounded-full bg-[#01ab31] text-[15px] text-white">✓</span>فاطمه
                            کریمی
                        </h3>
                        <p class="text-right text-[16px] leading-[22px] tracking-[-0.48px] text-[rgba(0,0,0,0.6)]">
                            بسته‌بندی عالی و
                            تحویل به موقع. کفش دقیقاً مطابق توضیحات سایت بود.</p>
                    </article>
                </div>
            </section>
        </main>

        <footer class="bg-white">
            <div
                class="relative mx-auto h-[398px] max-w-[1440px] p-8 nav:grid nav:h-auto nav:grid-cols-1 nav:gap-8 mobile:p-5 mobile:py-10">
                <section class="absolute right-8 top-16 flex w-[252px] flex-col items-start text-right nav:static"
                    aria-label="معرفی فروشگاه">
                    <img class="block h-[102px] w-[102px] scale-[1.57] object-cover max-w-full" src="uploads/logo.png"
                        alt="کفش ملی" />
                    <h2 class="mt-0 text-[24px] font-bold leading-[30px] tracking-[-0.72px]">فروشگاه اینترنتی کفش ملی
                    </h2>
                    <p class="mt-[15px] text-[16px] leading-[22px] tracking-[-0.48px]">بررسی، انتخاب و خرید آنلاین</p>
                </section>

                <nav class="absolute right-[368px] top-[106px] flex items-start gap-8 text-center [direction:ltr] nav:static nav:flex-wrap mobile:grid mobile:grid-cols-1"
                    aria-label="لینک‌های پایین صفحه">
                    <div class="flex flex-col items-center gap-2 whitespace-nowrap text-center">
                        <h3 class="mb-[10px] text-[20px] font-bold leading-[30px] tracking-[-0.6px]">با کفش ملی</h3><a
                            class="text-[16px] leading-[22px] tracking-[-0.48px] transition-colors duration-150 ease-in hover:text-[#00286d]"
                            href="#">شعب کفش ملی</a><a
                            class="text-[16px] leading-[22px] tracking-[-0.48px] transition-colors duration-150 ease-in hover:text-[#00286d]"
                            href="#">مجله کفش ملی</a><a
                            class="text-[16px] leading-[22px] tracking-[-0.48px] transition-colors duration-150 ease-in hover:text-[#00286d]"
                            href="#">تماس با کفش ملی</a><a
                            class="text-[16px] leading-[22px] tracking-[-0.48px] transition-colors duration-150 ease-in hover:text-[#00286d]"
                            href="#">درباره کفش ملی</a>
                    </div>
                    <div class="flex flex-col items-center gap-2 whitespace-nowrap text-center">
                        <h3 class="mb-[10px] text-[20px] font-bold leading-[30px] tracking-[-0.6px]">خدمات مشتریان</h3>
                        <a class="text-[16px] leading-[22px] tracking-[-0.48px] transition-colors duration-150 ease-in hover:text-[#00286d]"
                            href="#">پاسخ به پرسش‌های متداول</a><a
                            class="text-[16px] leading-[22px] tracking-[-0.48px] transition-colors duration-150 ease-in hover:text-[#00286d]"
                            href="#">رویه‌های بازگردانی کالا</a><a
                            class="text-[16px] leading-[22px] tracking-[-0.48px] transition-colors duration-150 ease-in hover:text-[#00286d]"
                            href="#">فرصت‌های شغلی کفش ملی</a><a
                            class="text-[16px] leading-[22px] tracking-[-0.48px] transition-colors duration-150 ease-in hover:text-[#00286d]"
                            href="#">شرایط استفاده از خدمات</a>
                    </div>
                    <div class="flex flex-col items-center gap-2 whitespace-nowrap text-center">
                        <h3 class="mb-[10px] text-[20px] font-bold leading-[30px] tracking-[-0.6px]">راهنمای خرید</h3><a
                            class="text-[16px] leading-[22px] tracking-[-0.48px] transition-colors duration-150 ease-in hover:text-[#00286d]"
                            href="#">رویه ارسال سفارش</a><a
                            class="text-[16px] leading-[22px] tracking-[-0.48px] transition-colors duration-150 ease-in hover:text-[#00286d]"
                            href="#">نحوه ثبت سفارش</a><a
                            class="text-[16px] leading-[22px] tracking-[-0.48px] transition-colors duration-150 ease-in hover:text-[#00286d]"
                            href="#">شیوه‌های پرداخت</a><a
                            class="text-[16px] leading-[22px] tracking-[-0.48px] transition-colors duration-150 ease-in hover:text-[#00286d]"
                            href="#">حریم خصوصی</a>
                    </div>
                </nav>

                <address
                    class="absolute left-8 top-[106px] flex h-[60px] w-[560px] items-start justify-between gap-[18px] not-italic [direction:ltr] nav:static nav:w-auto nav:flex-wrap mobile:h-auto mobile:justify-start">
                    <div class="flex flex-col items-start gap-2 text-left"><strong
                            class="text-[20px] leading-[30px] tracking-[-0.6px]">صدای مشتریان</strong><span
                            class="w-full text-center text-[16px] leading-[22px] tracking-[-0.48px] [direction:ltr]">02166690011</span>
                    </div>
                    <div class="flex flex-col items-start gap-2 text-left"><strong
                            class="text-[20px] leading-[30px] tracking-[-0.6px]">تلفن فروش عمده</strong><span
                            class="w-full text-center text-[16px] leading-[22px] tracking-[-0.48px] [direction:ltr]">02146076884</span>
                    </div>
                    <div class="flex flex-col items-start gap-2 text-left"><strong
                            class="text-[20px] leading-[30px] tracking-[-0.6px]">تلفن سایت</strong><span
                            class="w-full text-center text-[16px] leading-[22px] tracking-[-0.48px] [direction:ltr]">09900266255</span>
                    </div>
                    <div class="flex flex-col items-start gap-2 text-left"><strong
                            class="text-[20px] leading-[30px] tracking-[-0.6px]">واحد فروش اینترنتی</strong><span
                            class="w-full text-center text-[16px] leading-[22px] tracking-[-0.48px] [direction:ltr]">02146076907</span>
                    </div>
                </address>

                <div class="absolute left-8 top-[194px] flex max-w-[260px] flex-col items-center gap-2 text-center nav:static"
                    aria-label="نمادهای اعتماد">
                    <img class="block h-[80px] w-[260px] max-w-full object-contain" src="uploads/enamad.png"
                        alt="نمادهای اعتماد" />
                    <span class="text-[16px] leading-[22px] tracking-[-0.48px] text-[#242424]">نمادهای اعتماد فروشگاه
                        کفش
                        ملی</span>
                </div>

                <div
                    class="absolute left-8 right-8 top-[360px] flex items-center justify-between gap-6 text-[16px] leading-[22px] tracking-[-0.48px] text-[#a5a5a5] nav:static nav:flex-wrap mobile:flex-col mobile:items-start">
                    <p>تمام حقوق مادی و معنوی این وب‌سایت متعلق به کفش ملی است.</p>
                    <p><strong class="font-bold">ایمیل کفش ملی</strong>: Onlineshop@mellishoes.ir</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>


<?php

$db = NULL;

?>