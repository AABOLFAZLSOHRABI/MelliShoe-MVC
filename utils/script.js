
// ---------- Data (added product name, removed admin password_hash) ----------
let categories = [
    { id: 1, name: "مردانه", imageAddress: "/img/men.jpg" },
    { id: 2, name: "زنانه", imageAddress: "/img/women.jpg" },
    { id: 3, name: "بچگانه", imageAddress: "/img/kids.jpg" }
];
let products = [
    { id: 1, name: "کفش نایک ایر مکس", category_id: 1, brand: "نایک", imageAddress: "/shoes/nike1.jpg", price: 2850000, oldPrice: 3490000, created_at: "2024-11-10", updated_at: "2025-01-15" },
    { id: 2, name: "کفش آدیداس اولترا بوست", category_id: 2, brand: "آدیداس", imageAddress: "/shoes/adidas.jpg", price: 3120000, oldPrice: 0, created_at: "2024-12-01", updated_at: "2024-12-01" },
    { id: 3, name: "کفش پوما سوئد", category_id: 1, brand: "پوما", imageAddress: "/shoes/puma.jpg", price: 1950000, oldPrice: 2400000, created_at: "2025-01-05", updated_at: "2025-01-05" }
];
let comments = [
    { id: 1, customer_name: "مهدی کریمی", rating: 5, comment: "کیفیت عالی، ارسال سریع", is_verified: true, created_at: "2025-02-01" },
    { id: 2, customer_name: "سارا حسینی", rating: 4, comment: "جنس خوب، سایز دقیق", is_verified: false, created_at: "2025-02-10" },
    { id: 3, customer_name: "علی محمدی", rating: 3, comment: "بسته‌بندی ضعیف بود", is_verified: false, created_at: "2025-02-15" }
];
let admins = [
    { id: 1, username: "مدیر ارشد", email: "admin@mellishoes.ir", last_login_at: "2025-02-15 09:22", created_at: "2024-01-01", updated_at: "2025-01-20" },
    { id: 2, username: "پشتیبان", email: "support@mellishoes.ir", last_login_at: "2025-02-12 14:10", created_at: "2024-06-01", updated_at: "2025-02-01" }
];
let nextProductId = 4, nextCategoryId = 4, nextCommentId = 4, nextAdminId = 3;
let activeTab = "dashboard";

function getDate() { return new Date().toISOString().slice(0, 10); }
function getDateTime() { return new Date().toISOString().slice(0, 19).replace('T', ' '); }
function formatPrice(n) { return n ? Number(n).toLocaleString('fa-IR') : '—'; }
function stars(r) { let s = ''; for (let i = 1; i <= 5; i++) s += `<span class="${i <= r ? 'text-amber-500' : 'text-gray-300'} text-base">★</span>`; return s; }
function updateCommentsBadge() {
    const pending = comments.filter(c => !c.is_verified).length;
    const badge = document.getElementById('commentsBadge');
    if (badge) { if (pending > 0) { badge.textContent = pending; badge.classList.remove('hidden'); } else badge.classList.add('hidden'); }
}

function setActiveSidebar(tabId) {
    document.querySelectorAll('.sidebar-link').forEach(btn => {
        btn.classList.remove('bg-white/20', 'text-white');
        btn.classList.add('text-white/70');
        if (btn.dataset.tab === tabId) {
            btn.classList.add('bg-white/20', 'text-white');
            btn.classList.remove('text-white/70');
        }
    });
}

function switchTab(tab) {
    activeTab = tab;
    setActiveSidebar(tab);
    ['dashboard', 'products', 'categories', 'comments', 'admins'].forEach(t => {
        const el = document.getElementById(t + 'Section');
        if (el) el.classList.toggle('hidden', t !== tab);
    });
    const titles = { dashboard: 'داشبورد', products: 'مدیریت محصولات', categories: 'دسته‌بندی‌ها', comments: 'نظرات مشتریان', admins: 'مدیران سیستم' };
    document.getElementById('pageTitle').textContent = titles[tab];
    renderCurrentTab();
}

function renderCurrentTab() {
    if (activeTab === 'dashboard') renderDashboard();
    else if (activeTab === 'products') renderProducts();
    else if (activeTab === 'categories') renderCategories();
    else if (activeTab === 'comments') renderComments();
    else if (activeTab === 'admins') renderAdmins();
}

// Dashboard unchanged but product count uses new products length
function renderDashboard() {
    const unverifiedCount = comments.filter(c => !c.is_verified).length;
    document.getElementById('dashboardSection').innerHTML = `
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
          <div class="bg-white rounded-2xl border border-gray-100 p-5 flex flex-col gap-2 shadow-sm"><div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center"><svg class="w-5 h-5 fill-[#00286d]" viewBox="0 0 20 20"><path d="M4 3h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm1 2v10h10V5H5zm2 2h6v2H7V7zm0 4h6v2H7v-2z"/></svg></div><div class="text-3xl font-extrabold text-gray-900">${products.length}</div><div class="text-sm font-semibold text-gray-500">محصولات</div></div>
          <div class="bg-white rounded-2xl border p-5"><div class="w-11 h-11 rounded-xl bg-green-50 flex items-center justify-center"><svg class="w-5 h-5 fill-green-600" viewBox="0 0 20 20"><path d="M2 4a2 2 0 0 1 2-2h3.586A2 2 0 0 1 9 2.586L10.414 4H16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4z"/></svg></div><div class="text-3xl font-extrabold">${categories.length}</div><div class="text-sm font-semibold text-gray-500">دسته‌بندی‌ها</div></div>
          <div class="bg-white rounded-2xl border p-5"><div class="w-11 h-11 rounded-xl bg-orange-50 flex items-center justify-center"><svg class="w-5 h-5 fill-orange-600" viewBox="0 0 20 20"><path d="M2 5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H6l-4 4V5z"/></svg></div><div class="text-3xl font-extrabold">${comments.length}</div><div class="text-sm font-semibold text-gray-500">نظرات <span class="text-orange-600 text-xs">(${unverifiedCount} در انتظار)</span></div></div>
          <div class="bg-white rounded-2xl border p-5"><div class="w-11 h-11 rounded-xl bg-purple-50 flex items-center justify-center"><svg class="w-5 h-5 fill-purple-700" viewBox="0 0 20 20"><path d="M9 6a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm-4 8a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v1a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-1z"/></svg></div><div class="text-3xl font-extrabold">${admins.length}</div><div class="text-sm font-semibold text-gray-500">مدیران سیستم</div></div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
          <div class="bg-white rounded-2xl border overflow-hidden"><div class="flex justify-between items-center px-5 py-4 border-b"><h3 class="font-extrabold text-gray-800">آخرین نظرات</h3><button onclick="switchTab('comments')" class="text-blue-600 text-sm font-bold bg-transparent">مشاهده همه</button></div><div>${comments.slice(0, 4).map(c => `<div class="flex gap-3 p-4 border-b last:border-0"><div class="flex-1"><div class="font-bold text-gray-800">${c.customer_name}</div><div class="my-1">${stars(c.rating)}</div><div class="text-xs text-gray-500">${c.comment}</div></div><div><span class="px-2 py-0.5 rounded-full text-xs font-bold ${c.is_verified ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'}">${c.is_verified ? 'تایید' : 'در انتظار'}</span></div></div>`).join('')}</div></div>
          <div class="bg-white rounded-2xl border overflow-hidden"><div class="flex justify-between px-5 py-4 border-b"><h3 class="font-extrabold">محصولات اخیر</h3><button onclick="switchTab('products')" class="text-blue-600 text-sm font-bold">مشاهده همه</button></div><div class="overflow-x-auto"><table class="w-full text-sm"><thead class="bg-gray-50"><tr><th class="p-3 text-right">نام محصول</th><th>برند</th><th>قیمت</th></tr></thead><tbody>${products.slice(0, 4).map(p => `<tr class="border-b"><td class="p-3 font-bold">${p.name}</td><td>${p.brand}</td><td>${formatPrice(p.price)} ت</td></tr>`).join('')}</tbody></table></div></div>
        </div>`;
}

// Products render with new "name" column before brand
function renderProducts() {
    const catMap = Object.fromEntries(categories.map(c => [c.id, c.name]));
    document.getElementById('productsSection').innerHTML = `
        <div class="flex justify-between items-center mb-5"><div><h2 class="text-xl font-extrabold text-gray-900">مدیریت محصولات</h2><p class="text-xs text-gray-400">${products.length} محصول</p></div><button id="openAddProductBtn" class="bg-[#00286d] text-white rounded-xl px-4 py-2 text-sm font-bold">+ افزودن محصول</button></div>
        <div class="bg-white rounded-2xl border overflow-hidden"><div class="overflow-x-auto"><table class="w-full text-sm"><thead class="bg-gray-50"><tr><th class="p-3 text-right">#</th><th>نام محصول</th><th>برند</th><th>دسته</th><th>قیمت (تومان)</th><th>قیمت قبل</th><th>تاریخ</th><th>عملیات</th></tr></thead><tbody>${products.map(p => `<tr class="border-b hover:bg-gray-50"><td class="p-3 text-gray-400 text-xs">${p.id}</td><td class="font-bold">${p.name}</td><td>${p.brand}</td><td><span class="bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full text-xs">${catMap[p.category_id] || '—'}</span></td><td>${formatPrice(p.price)}</td><td class="${p.oldPrice ? 'line-through' : ''} text-gray-400">${p.oldPrice ? formatPrice(p.oldPrice) : '—'}</td><td class="text-xs text-gray-400">${p.created_at}</td><td><button class="editProductBtn text-blue-600 font-bold ml-2" data-id="${p.id}">ویرایش</button><button class="deleteProductBtn text-red-600 font-bold" data-id="${p.id}">حذف</button></td></tr>`).join('')}</tbody></table></div></div>`;
    document.getElementById('openAddProductBtn').onclick = () => openProductModal(null);
    document.querySelectorAll('.editProductBtn').forEach(b => b.onclick = () => openProductModal(parseInt(b.dataset.id)));
    document.querySelectorAll('.deleteProductBtn').forEach(b => b.onclick = () => { if (confirm('حذف شود؟')) { products = products.filter(p => p.id !== parseInt(b.dataset.id)); renderProducts(); } });
}

function openProductModal(id) {
    modalShow('productModal');
    const sel = document.getElementById('prodCategoryId');
    sel.innerHTML = categories.map(c => `<option value="${c.id}">${c.name}</option>`).join('');
    if (id) {
        const p = products.find(x => x.id === id);
        if (p) {
            document.getElementById('productId').value = p.id;
            document.getElementById('prodName').value = p.name || '';
            document.getElementById('prodBrand').value = p.brand;
            sel.value = p.category_id;
            document.getElementById('prodPrice').value = p.price;
            document.getElementById('prodOldPrice').value = p.oldPrice || '';
            document.getElementById('prodImage').value = p.imageAddress || '';
        }
    } else {
        document.getElementById('productForm').reset();
        document.getElementById('productId').value = '';
    }
}

function renderCategories() {
    document.getElementById('categoriesSection').innerHTML = `<div class="flex justify-between mb-5"><div><h2 class="text-xl font-extrabold">دسته‌بندی‌ها</h2><p class="text-xs text-gray-400">${categories.length} دسته</p></div><button id="openAddCategoryBtn" class="bg-[#00286d] text-white rounded-xl px-4 py-2 text-sm">+ افزودن دسته</button></div><div class="bg-white rounded-2xl border overflow-x-auto"><table class="w-full text-sm"><thead class="bg-gray-50"><tr><th class="p-3">#</th><th>نام دسته</th><th>آدرس تصویر</th><th>تعداد محصول</th><th>عملیات</th></tr></thead><tbody>${categories.map(c => `<tr class="border-b"><td class="p-3 text-gray-400">${c.id}</td><td class="font-bold">${c.name}</td><td class="text-gray-400 text-xs">${c.imageAddress || '—'}</td><td><span class="bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full text-xs">${products.filter(p => p.category_id === c.id).length} محصول</span></td><td><button class="editCatBtn text-blue-600 ml-2" data-id="${c.id}">ویرایش</button><button class="deleteCatBtn text-red-600" data-id="${c.id}">حذف</button></td></tr>`).join('')}</tbody></table></div>`;
    document.getElementById('openAddCategoryBtn').onclick = () => openCategoryModal(null);
    document.querySelectorAll('.editCatBtn').forEach(b => b.onclick = () => openCategoryModal(parseInt(b.dataset.id)));
    document.querySelectorAll('.deleteCatBtn').forEach(b => b.onclick = () => { if (products.some(p => p.category_id === parseInt(b.dataset.id))) return alert('ابتدا محصولات این دسته را تغییر دهید'); if (confirm('حذف شود؟')) { categories = categories.filter(c => c.id !== parseInt(b.dataset.id)); renderCategories(); } });
}
function openCategoryModal(id) { modalShow('categoryModal'); if (id) { const c = categories.find(x => x.id === id); if (c) { document.getElementById('catId').value = c.id; document.getElementById('catName').value = c.name; document.getElementById('catImage').value = c.imageAddress || ''; } } else document.getElementById('categoryForm').reset(); }
function renderComments() {
    document.getElementById('commentsSection').innerHTML = `<div class="flex justify-between mb-5"><div><h2 class="text-xl font-extrabold">نظرات مشتریان</h2><p class="text-xs">${comments.filter(c => !c.is_verified).length} نظر در انتظار</p></div><button id="openAddCommentBtn" class="bg-[#00286d] text-white rounded-xl px-4 py-2">+ ثبت نظر</button></div><div class="bg-white rounded-2xl border overflow-x-auto"><table class="w-full text-sm"><thead class="bg-gray-50"><tr><th>#</th><th>مشتری</th><th>امتیاز</th><th>متن نظر</th><th>وضعیت</th><th>تاریخ</th><th>عملیات</th></tr></thead><tbody>${comments.map(c => `<tr class="border-b"><td class="p-2">${c.id}</td><td class="font-bold">${c.customer_name}</td><td>${stars(c.rating)}</td><td class="max-w-xs truncate">${c.comment}</td><td><span class="px-2 py-0.5 rounded-full text-xs ${c.is_verified ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'}">${c.is_verified ? '✓ تایید' : 'در انتظار'}</span></td><td class="text-xs">${c.created_at}</td><td><button class="editCommentBtn text-blue-600 ml-2" data-id="${c.id}">ویرایش</button><button class="deleteCommentBtn text-red-600" data-id="${c.id}">حذف</button></td></tr>`).join('')}</tbody></table></div>`;
    document.getElementById('openAddCommentBtn').onclick = () => openCommentModal(null);
    document.querySelectorAll('.editCommentBtn').forEach(b => b.onclick = () => openCommentModal(parseInt(b.dataset.id)));
    document.querySelectorAll('.deleteCommentBtn').forEach(b => b.onclick = () => { if (confirm('حذف شود؟')) { comments = comments.filter(c => c.id !== parseInt(b.dataset.id)); updateCommentsBadge(); renderComments(); } });
}
function openCommentModal(id) { modalShow('commentModal'); if (id) { const c = comments.find(x => x.id === id); if (c) { document.getElementById('commentId').value = c.id; document.getElementById('commentCustomer').value = c.customer_name; document.getElementById('commentRating').value = c.rating; document.getElementById('commentText').value = c.comment; document.getElementById('commentVerified').checked = c.is_verified; } } else document.getElementById('commentForm').reset(); }

// Admins render without password_hash column
function renderAdmins() {
    document.getElementById('adminsSection').innerHTML = `<div class="flex justify-between mb-5"><div><h2 class="text-xl font-extrabold">مدیران سیستم</h2><p class="text-xs">${admins.length} مدیر</p></div><button id="openAddAdminBtn" class="bg-[#00286d] text-white rounded-xl px-4 py-2">+ مدیر جدید</button></div><div class="bg-white rounded-2xl border overflow-x-auto"><table class="w-full text-sm"><thead class="bg-gray-50"><tr><th>#</th><th>نام کاربری</th><th>ایمیل</th><th>آخرین ورود</th><th>تاریخ ایجاد</th><th>عملیات</th></tr></thead><tbody>${admins.map(a => `<tr class="border-b"><td class="p-2">${a.id}</td><td class="font-bold">${a.username}</td><td>${a.email}</td><td class="text-xs">${a.last_login_at || '—'}</td><td class="text-xs">${a.created_at}</td><td><button class="editAdminBtn text-blue-600 ml-2" data-id="${a.id}">ویرایش</button><button class="deleteAdminBtn text-red-600" data-id="${a.id}">حذف</button></td></tr>`).join('')}</tbody></table></div>`;
    document.getElementById('openAddAdminBtn').onclick = () => openAdminModal(null);
    document.querySelectorAll('.editAdminBtn').forEach(b => b.onclick = () => openAdminModal(parseInt(b.dataset.id)));
    document.querySelectorAll('.deleteAdminBtn').forEach(b => b.onclick = () => { if (confirm('حذف شود؟')) { admins = admins.filter(a => a.id !== parseInt(b.dataset.id)); renderAdmins(); } });
}
function openAdminModal(id) { modalShow('adminModal'); if (id) { const a = admins.find(x => x.id === id); if (a) { document.getElementById('adminId').value = a.id; document.getElementById('adminUsername').value = a.username; document.getElementById('adminEmail').value = a.email; document.getElementById('adminLastLogin').value = a.last_login_at || ''; } } else document.getElementById('adminForm').reset(); }

function modalShow(id) { document.getElementById(id).classList.remove('hidden'); }
function modalHide(id) { document.getElementById(id).classList.add('hidden'); }

// Product form submit (with name)
document.getElementById('productForm').onsubmit = e => { e.preventDefault(); const id = document.getElementById('productId').value; const name = document.getElementById('prodName').value.trim(); const brand = document.getElementById('prodBrand').value.trim(); const catId = parseInt(document.getElementById('prodCategoryId').value); const img = document.getElementById('prodImage').value; const price = parseFloat(document.getElementById('prodPrice').value); const oldPrice = parseFloat(document.getElementById('prodOldPrice').value) || 0; if (!name || !brand || isNaN(price)) return alert('نام محصول، برند و قیمت الزامی'); const now = getDate(); if (id) { const i = products.findIndex(p => p.id == id); if (i !== -1) products[i] = { ...products[i], name, brand, category_id: catId, imageAddress: img, price, oldPrice, updated_at: now }; } else products.push({ id: nextProductId++, name, category_id: catId, brand, imageAddress: img, price, oldPrice, created_at: now, updated_at: now }); modalHide('productModal'); renderProducts(); };
document.getElementById('categoryForm').onsubmit = e => { e.preventDefault(); const id = document.getElementById('catId').value; const name = document.getElementById('catName').value.trim(); const img = document.getElementById('catImage').value; if (!name) return alert('نام دسته الزامی'); if (id) { const i = categories.findIndex(c => c.id == id); if (i !== -1) categories[i] = { ...categories[i], name, imageAddress: img }; } else categories.push({ id: nextCategoryId++, name, imageAddress: img }); modalHide('categoryModal'); renderCategories(); };
document.getElementById('commentForm').onsubmit = e => { e.preventDefault(); const id = document.getElementById('commentId').value; const name = document.getElementById('commentCustomer').value.trim(); const rating = parseInt(document.getElementById('commentRating').value); const text = document.getElementById('commentText').value.trim(); const verified = document.getElementById('commentVerified').checked; if (!name || !rating || !text) return alert('تمامی فیلدها الزامی'); const now = getDate(); if (id) { const i = comments.findIndex(c => c.id == id); if (i !== -1) comments[i] = { ...comments[i], customer_name: name, rating, comment: text, is_verified: verified }; } else comments.push({ id: nextCommentId++, customer_name: name, rating, comment: text, is_verified: verified, created_at: now }); modalHide('commentModal'); updateCommentsBadge(); renderComments(); };
// Admin form without password hash
document.getElementById('adminForm').onsubmit = e => { e.preventDefault(); const id = document.getElementById('adminId').value; const user = document.getElementById('adminUsername').value.trim(); const email = document.getElementById('adminEmail').value.trim(); const last = document.getElementById('adminLastLogin').value; if (!user || !email) return alert('نام کاربری و ایمیل الزامی'); const now = getDateTime(); if (id) { const i = admins.findIndex(a => a.id == id); if (i !== -1) admins[i] = { ...admins[i], username: user, email, last_login_at: last, updated_at: now }; } else admins.push({ id: nextAdminId++, username: user, email, last_login_at: last || null, created_at: now, updated_at: now }); modalHide('adminModal'); renderAdmins(); };

// Close modals listeners
document.querySelectorAll('.close-product-modal').forEach(btn => btn.addEventListener('click', () => modalHide('productModal')));
document.querySelectorAll('.close-category-modal').forEach(btn => btn.addEventListener('click', () => modalHide('categoryModal')));
document.querySelectorAll('.close-comment-modal').forEach(btn => btn.addEventListener('click', () => modalHide('commentModal')));
document.querySelectorAll('.close-admin-modal').forEach(btn => btn.addEventListener('click', () => modalHide('adminModal')));
['productModal', 'categoryModal', 'commentModal', 'adminModal'].forEach(m => { document.getElementById(m).addEventListener('click', e => { if (e.target === e.currentTarget) modalHide(m); }); });

// Init
document.querySelectorAll('.sidebar-link[data-tab]').forEach(btn => { btn.addEventListener('click', () => switchTab(btn.dataset.tab)); });
updateCommentsBadge();
setActiveSidebar('dashboard');
renderDashboard();
