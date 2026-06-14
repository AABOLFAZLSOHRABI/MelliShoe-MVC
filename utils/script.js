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
    setActiveSidebar(tab);
    ['dashboard', 'products', 'categories', 'comments', 'admins'].forEach(section => {
        const element = document.getElementById(section + 'Section');
        if (element) element.classList.toggle('hidden', section !== tab);
    });
    const titles = { dashboard: 'داشبورد', products: 'مدیریت محصولات', categories: 'دسته‌بندی‌ها', comments: 'نظرات مشتریان', admins: 'مدیران سیستم' };
    document.getElementById('pageTitle').textContent = titles[tab];
}

function showModal(id) {
    const modal = document.getElementById(id);
    if (modal) modal.classList.remove('hidden');
}

function hideModal(id) {
    const modal = document.getElementById(id);
    if (modal) modal.classList.add('hidden');
}

document.querySelectorAll('[data-tab]').forEach(btn => btn.addEventListener('click', () => switchTab(btn.dataset.tab)));
document.querySelectorAll('[data-tab-target]').forEach(btn => btn.addEventListener('click', () => switchTab(btn.dataset.tabTarget)));
document.querySelectorAll('[data-modal-open]').forEach(btn => btn.addEventListener('click', () => showModal(btn.dataset.modalOpen)));
document.querySelectorAll('[data-modal-close]').forEach(btn => btn.addEventListener('click', () => hideModal(btn.dataset.modalClose)));
document.querySelectorAll('[id$="Modal"]').forEach(modal => modal.addEventListener('click', event => {
    if (event.target === event.currentTarget) hideModal(modal.id);
}));
const params = new URLSearchParams(window.location.search);
const allowedTabs = ['dashboard', 'products', 'categories', 'comments', 'admins'];
const requestedTab = params.get('tab') || 'dashboard';
const activeTab = allowedTabs.includes(requestedTab) ? requestedTab : 'dashboard';

switchTab(activeTab);
