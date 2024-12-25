<template>
    <section class="module-resume">
        <div class="container" style="margin-top: 0;">
            <h2 class="main-heading">Створи своє ідеальне резюме</h2>
            <p class="subheading">За допомогою штучного інтелекту за 4 простих кроки!</p>
            <div class="row">
                <div class="col-md-12">
                    <!-- Кроки для мобільного -->
                    <div id="nav-mobile" class="mobile-steps">
                        <div v-show="currentTab === 1" class="one-step">
                            <h2 class="step-heading">Крок 1: Соціальні мережі</h2>
                            <p class="step-description">Додайте посилання на свої соціальні мережі, щоб ваш роботодавець міг ознайомитись з вашою онлайн-активністю.</p>
                        </div>
                        <div v-show="currentTab === 2" class="two-step">
                            <h2 class="step-heading">Крок 2: Основна інформація</h2>
                            <p class="step-description">Заповніть основні дані, такі як ваше ім'я, електронну пошту та телефон для швидкого контакту.</p>
                        </div>
                        <div v-show="currentTab === 3" class="three-step">
                            <h2 class="step-heading">Крок 3: Додаткова інформація</h2>
                            <p class="step-description">Вкажіть свою освіту, навички та мови для повнішого опису ваших кваліфікацій.</p>
                        </div>
                        <div v-show="currentTab === 4" class="four-step">
                            <h2 class="step-heading">Крок 4: Резюме</h2>
                            <p class="step-description">Перегляньте своє готове резюме після заповнення всіх полів і сформуйте його в одному файлі.</p>
                        </div>
                    </div>

                    <!-- Навігаційна панель для десктопа -->
                    <ul class="nav nav-tabs justify-content-between" id="nav-desktop">
                        <li class="nav-item" :class="{ active: currentTab === 1 }"><a class="nav-link">
                            <i class="ti-facebook"></i> Соціальні мережі</a></li>
                        <li class="nav-item" :class="{ active: currentTab === 2 }"><a class="nav-link">
                            <i class="ti-user"></i> Основна інформація</a></li>
                        <li class="nav-item" :class="{ active: currentTab === 3 }"><a class="nav-link">
                            <i class="ti-info-alt"></i> Додаткова інформація</a></li>
                        <li class="nav-item" :class="{ active: currentTab === 4 }"><a class="nav-link">
                            <i class="ti-file"></i> Резюме!</a></li>
                    </ul>
                    <!-- Вкладки -->
                    <div class="tab-content">
                        <!-- Соціальні мережі -->
                        <div :class="['tab-pane', { 'show': currentTab === 1, 'active': currentTab === 1 }]">
                            <div class="container" id="mobile">
                                <form>
                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ti-facebook"></i></span>
                                            </div>
                                            <input id="facebook" v-model="formData.facebook" class="form-control" type="url" placeholder="Посилання на Facebook">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="linkedin">LinkedIn</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ti-linkedin"></i></span>
                                            </div>
                                            <input id="linkedin" v-model="formData.linkedin" class="form-control" type="url" placeholder="Посилання на LinkedIn">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="linkedin">GitHub</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ti-github"></i></span>
                                            </div>
                                            <input id="linkedin" v-model="formData.github" class="form-control" type="url" placeholder="Посилання на GitHub">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="twitter">Twitter</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ti-twitter"></i></span>
                                            </div>
                                            <input id="twitter" v-model="formData.twitter" class="form-control" type="url" placeholder="Посилання на Twitter">
                                        </div>
                                    </div>
                                </form>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary" @click="nextTab">ДАЛІ</button>
                                </div>
                            </div>
                        </div>

                        <!-- Основна інформація -->
                        <div :class="['tab-pane', { 'show': currentTab === 2, 'active': currentTab === 2 }]">
                            <form>
                                <div class="form-group">
                                    <label for="name">Ваше ім'я</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                        </div>
                                        <input id="name" v-model="formData.name" class="form-control" type="text" placeholder="Ваше ім'я">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-email"></i></span>
                                        </div>
                                        <input id="email" v-model="formData.email" class="form-control" type="email" placeholder="Ваш email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Телефон</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-mobile"></i></span>
                                        </div>
                                        <input id="phone" v-model="formData.phone" class="form-control" type="tel" placeholder="Ваш номер телефону">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="avatar" class="font-weight-bold">Ваш аватар</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white"><i class="ti-gallery"></i></span>
                                        </div>
                                        <input id="avatar" ref="avatar" class="form-control" type="file" @change="handleFileChange">
                                    </div>
                                    <small class="form-text text-muted">Оберіть файл зображення для вашого аватару.</small>
                                </div>
                            </form>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-secondary" @click="previousTab" :disabled="currentTab === 1">НАЗАД</button>
                                <button class="btn btn-primary" @click="nextTab">ДАЛІ</button>
                            </div>
                        </div>

                        <!-- Додаткова інформація -->
                        <div :class="['tab-pane', { 'show': currentTab === 3, 'active': currentTab === 3 }]">
                            <form>
                                <div class="form-group">
                                    <label for="education">Освіта</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-book"></i></span>
                                        </div>
                                        <input id="education" v-model="formData.education" class="form-control" type="text" placeholder="Ваша освіта">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="skills">Навички</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-layers"></i></span>
                                        </div>
                                        <textarea id="skills" v-model="formData.skills" class="form-control" rows="4" placeholder="Ваші навички"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="languages">Мови</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-world"></i></span>
                                        </div>
                                        <input id="languages" v-model="formData.languages" class="form-control" type="text" placeholder="Мови, якими ви володієте">
                                    </div>
                                </div>
                            </form>
                            <!-- Кнопки Back та Next -->
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-secondary" @click="previousTab" :disabled="currentTab === 1">НАЗАД</button>
                                <button class="btn btn-primary" @click="nextTab">ДАЛІ</button>
                            </div>
                        </div>

                        <!-- Резюме -->
                        <div :class="['tab-pane', { 'show': currentTab === 4, 'active': currentTab === 4 }]">
                            <div v-if="isLoading" class="spinner-border text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div v-html="resume"></div>
                            <!-- Кнопка Back на останньому етапі -->
                            <button class="btn btn-secondary" @click="previousTab">НАЗАД</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from 'axios';
export default {
    props: {
        isAuthenticated: {
            type: Boolean,
            required: true
        }
    },
    data() {
        return {
            currentTab: 1,
            isLoading: false,
            formData: {
                facebook: '',
                linkedin: '',
                twitter: '',
                github: '',
                name: '',
                email: '',
                phone: '',
                education: '',
                skills: '',
                languages: ''
            },
            avatar: null,
            resume: ''
        };
    },
    methods: {
        setTab(tabIndex) {
            this.currentTab = tabIndex;
        },
        handleFileChange(event) {
            const file = event.target.files[0];
            if (file) {
                this.avatar = file;
            }
        },
        nextTab() {
            if (this.currentTab < 4) {
                this.currentTab++;
            }

            if (this.currentTab === 4 ) {
                if(this.isAuthenticated) {
                    const cleanData = JSON.parse(JSON.stringify(this.formData));
                    this.submitResume(cleanData);
                }else{
                    window.location.href = '/login';
                }
            }
        },

        previousTab() {
            if (this.currentTab > 1) {
                this.currentTab--;
            }
        },

        submitResume(data) {
            this.isLoading = true;
            console.log(data);

            const formData = new FormData();

            for (const key in data) {
                if (data[key]) {
                    formData.append(key, data[key]);
                }
            }

            if (this.avatar) {
                formData.append('avatar', this.avatar);
            }

            axios.post('/submit-resume', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(response => {
                    this.resume = response.data.enhanced_text.replace(/\n/g, '<br>');
                })
                .catch(error => {
                    console.error(error);
                })
                .finally(() => {
                    this.isLoading = false;
                });
        }
    },
    mounted() {
        // Налаштування кольору тексту після завантаження компонента
        const innerBrand = document.querySelector('.header.header-transparent .inner-brand');
        if (innerBrand) {
            innerBrand.style.color = 'black';
        }

        const menuLinks = document.querySelectorAll('.inner-nav > ul > li > a');
        menuLinks.forEach(link => {
            link.style.color = 'black';
        });

        const dopNavLinks = document.querySelectorAll('.header.header-transparent .dop-nav > ul > li > a');
        dopNavLinks.forEach(link => {
            link.style.color = 'black';
        });
    }
};
</script>

<style>
.module-resume {
    padding-top: 150px;
    padding-bottom: 100px;
    @media(max-width: 768px) {
        padding-top: 50px;
    }
}

.nav-tabs {
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.nav-item {
    flex: 1;
    text-align: center;
}
.nav-item.active {
    color: #2f62c4;
}

.nav-link {
    display: block;
    padding: 15px 20px;
    font-size: 14px;
    text-transform: uppercase;
    transition: all 0.3s ease;
}

.nav-link.active {
    background-color: #007bff;
    color: #fff;
}
.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
    border-color: transparent;
}

/* Стилі для полів вводу */
.form-group {
    margin-bottom: 20px;
}

.form-control {
    border-radius: 5px;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ddd;
}

.input-group-text {
    background-color: #007bff;
    color: white;
}

/* Іконки в полях вводу */
.input-group .input-group-prepend .input-group-text {
    font-size: 18px;
}

/* Стилі для контейнера вкладки */
.tab-content {
    margin-top: 30px;
    @media (max-width: 768px) {
        margin-top: 0;
        padding: 0 0;
    }
}

.tab-pane {
    display: none;
}

.tab-pane.show {
    display: block;
}

.tab-pane.active {
    display: block;
    /* Додаткові стилі для активної вкладки */
}

/* Кнопка Next та Back */
button.btn-primary,
button.btn-secondary {
    margin-top: 20px;
    font-size: 16px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button.btn-primary:hover,
button.btn-secondary:hover {
    background-color: #0056b3;
}

button.btn-secondary {
    background-color: #6c757d;
}

button.btn-secondary:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}
#nav-desktop{
    @media (max-width: 768px) {
        display: none;
    }
}
@media (max-width: 768px) {
    .mobile-steps {
        margin-top: 20px;
        font-size: 16px;
        color: #333;
        font-family: 'Roboto', sans-serif;
    }
    .step-heading {
        font-size: 20px;
        color: #007bff;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .step-description {
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 20px;
    }
    #mobile {
        padding-left: 0;
    }
}
@media (min-width: 769px) {
    .mobile-steps {
        display: none;
    }
}


@media (max-width: 992px) {
    .inner-navigation.collapse.show {
        display: block !important;
        background-color: white !important;
    }
    .inner-navigation.collapsing {
        background-color: white !important;
    }
    .inner-nav > ul > li > a {
        color:black!important;
    }
}

</style>
