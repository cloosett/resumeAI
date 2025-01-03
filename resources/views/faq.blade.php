@extends('layouts.layout')

@section('content')
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2 class="text-center mb-4">ResumeAI - Автоматизоване створення резюме за допомогою штучного інтелекту</h2>
                    <p class="lead text-justify">Ласкаво просимо в ResumeAI — інноваційну платформу, розроблену для того, щоб допомогти вам створити професійне, оптимізоване резюме за допомогою штучного інтелекту. Незалежно від того, чи ви вперше вступаєте на ринок праці, чи оновлюєте своє резюме для нової кар'єрної можливості, ResumeAI робить цей процес безперешкодним і ефективним. Наші передові алгоритми аналізують ваш досвід, навички, освіту та досягнення, щоб створити персоналізоване резюме, яке підкреслює ваші сильні сторони і відповідає стандартам індустрії.</p>
                    <p class="lead text-justify">За допомогою ResumeAI ви можете створити кілька версій свого резюме для різних вакансій, щоб кожна з них була ідеально підготовлена під конкретну позицію. Наша платформа також пропонує корисні рекомендації щодо покращення вашого резюме і збільшення шансів на те, щоб вас помітили рекрутери. Незалежно від того, чи ви студент, досвідчений професіонал або просто шукаєте роботу, ResumeAI надає інструменти та підтримку, які допоможуть вам виділитися на конкурентному ринку праці.</p>
                    <p class="lead text-justify">Ми розуміємо, що створення сильного резюме може бути складним, тому наша мета — спростити цей процес, заощадити ваш час і збільшити ваші шанси на отримання роботи. Ознайомтесь з нашими частими запитаннями (FAQ), щоб дізнатися більше про те, як працює ResumeAI і як він може допомогти вам досягти ваших кар'єрних цілей.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-9">
                    <div id="faq">
                        <h5>FAQ - Часто задавані питання</h5>

                        <div class="mb-3">
                            <h6 class="faq-question" data-toggle="collapse" data-target="#faq-1" aria-expanded="false" aria-controls="faq-1">1. Як працює ResumeAI?</h6>
                            <div id="faq-1" class="collapse">
                                <p class="lead text-justify">ResumeAI — це інноваційна платформа, що використовує штучний інтелект для автоматичного створення та оптимізації вашого резюме. Процес простий: ви вводите свою особисту інформацію, досвід, навички, освіту та інші деталі, а система самостійно формує професійне резюме, що відповідає стандартам сучасного ринку праці. Окрім цього, система використовує алгоритми машинного навчання для поліпшення тексту та структури резюме, оптимізуючи його під вимоги роботів-сканерів і рекрутерів. Це дає вашому резюме значно більші шанси на успіх у процесі відбору. Це особливо корисно для тих, хто не має часу на написання резюме вручну або не знає, як правильно сформулювати свої досягнення та навички.</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="faq-question" data-toggle="collapse" data-target="#faq-2" aria-expanded="false" aria-controls="faq-2">2. Чи безпечно використовувати ResumeAI для створення резюме?</h6>
                            <div id="faq-2" class="collapse">
                                <p class="lead text-justify">Так, використання ResumeAI — це абсолютно безпечно. Ваша конфіденційність є для нас пріоритетом. Всі особисті дані, які ви вводите на нашій платформі, зберігаються та обробляються відповідно до найсуворіших стандартів безпеки. Для захисту інформації ми використовуємо шифрування та інші сучасні технології. Крім того, ваші дані не передаються стороннім організаціям без вашого дозволу, що гарантує вам повну конфіденційність. Платформа виконує всі необхідні заходи для забезпечення безпеки ваших даних, що включає використання надійних серверів та безпечних протоколів для обміну інформацією.</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="faq-question" data-toggle="collapse" data-target="#faq-3" aria-expanded="false" aria-controls="faq-3">3. Які функції пропонує ResumeAI?</h6>
                            <div id="faq-3" class="collapse">
                                <p class="lead text-justify">ResumeAI надає низку корисних функцій для полегшення процесу створення резюме:</p>
                                <ul>
                                    <li>Автоматичне створення резюме на основі введених вами даних: ваш досвід, освіта, навички та інше перетворюються в зрозуміле, чітке і професійне резюме. Це дозволяє вам зосередитися на подачі важливої інформації, залишаючи решту процесу системі.</li>
                                    <li>Шаблони резюме для різних галузей і професій: ви можете вибрати стиль, який найкраще підходить під вашу сферу діяльності, що дозволяє створити максимально відповідне резюме. Ці шаблони враховують специфіку різних професій, що дає змогу створити резюме, яке відповідає вимогам конкретної галузі.</li>
                                    <li>Оптимізація резюме для пошукових систем і систем відбору: наше резюме буде адаптоване для того, щоб рекрутери змогли швидко і ефективно знайти вашу інформацію. Це включає у себе правильне використання ключових слів, відповідних вакансії, що підвищує шанси на потрапляння в базу даних рекрутерів.</li>
                                    <li>Рекомендації та поради по покращенню вашого резюме, включаючи поради щодо досягнень, формулювання досвіду та створення сильних резюме для кращих результатів. Всі ці поради орієнтовані на підвищення вашої конкурентоспроможності на ринку праці.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="faq-question" data-toggle="collapse" data-target="#faq-4" aria-expanded="false" aria-controls="faq-4">4. Чи можна зберігати та редагувати своє резюме?</h6>
                            <div id="faq-4" class="collapse">
                                <p class="lead text-justify">Так, ви можете не тільки зберігати своє резюме, але й редагувати його в будь-який час через свій особистий акаунт. Після створення резюме ви можете зберігати його в популярних форматах, таких як PDF або DOCX, а також редагувати, щоб оновлювати свої дані. Крім того, ви маєте можливість створювати кілька версій резюме для різних вакансій, що дасть вам більшу гнучкість під час пошуку роботи. Це означає, що ви можете адаптувати резюме під конкретні вакансії, додаючи або змінюючи відповідні досягнення або навички.</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="faq-question" data-toggle="collapse" data-target="#faq-5" aria-expanded="false" aria-controls="faq-5">5. Як можна змінити або оновити своє резюме?</h6>
                            <div id="faq-5" class="collapse">
                                <p class="lead text-justify">Змінити або оновити своє резюме дуже просто. Достатньо увійти в свій акаунт на платформі, вибрати резюме, яке потрібно змінити, та внести необхідні зміни. Ви можете оновлювати будь-яку інформацію, додавати нові досягнення, досвід, освіту або змінювати форматування. Після внесення змін система автоматично оптимізує структуру та оновить документ для того, щоб він відповідав останнім стандартам. Це дозволяє вам завжди мати актуальне резюме, яке відповідає вимогам роботодавців.</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="faq-question" data-toggle="collapse" data-target="#faq-6" aria-expanded="false" aria-controls="faq-6">6. Чи є безкоштовний доступ до ResumeAI?</h6>
                            <div id="faq-6" class="collapse">
                                <p class="lead text-justify">Так, ми пропонуємо безкоштовний доступ до ResumeAI, який дозволяє створити одне резюме. Ця версія платформи дає вам можливість оцінити її функціонал і створити базове резюме. Однак для доступу до додаткових можливостей, таких як збереження резюме в різних форматах, вибір преміум-шаблонів або редагування кількох версій, вам потрібно підписатися на платний план. Безкоштовна версія є чудовим варіантом для користувачів, які просто хочуть створити одне базове резюме або для тих, хто лише починає свою кар'єру.</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="faq-question" data-toggle="collapse" data-target="#faq-7" aria-expanded="false" aria-controls="faq-7">7. Чи можна використовувати ResumeAI для різних типів резюме (наприклад, для студентів, професіоналів і т.д.)?</h6>
                            <div id="faq-7" class="collapse">
                                <p class="lead text-justify">Так, ResumeAI підтримує створення резюме для всіх категорій користувачів. Ви можете вибрати шаблон, який найбільше підходить до вашого досвіду та професійних цілей. Система автоматично адаптує стиль і структуру резюме, що дає змогу як студентам, так і досвідченим професіоналам створювати ефективні резюме для будь-яких вакансій. Всі шаблони враховують особливості різних професійних шляхів і дають змогу створювати резюме, яке буде виглядати професійно та зрозуміло для рекрутерів і роботодавців.</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="faq-question" data-toggle="collapse" data-target="#faq-8" aria-expanded="false" aria-controls="faq-8">8. Що робити, якщо я забув пароль?</h6>
                            <div id="faq-8" class="collapse">
                                <p class="lead text-justify">Не хвилюйтеся, якщо ви забули пароль! Просто перейдіть на сторінку входу на нашому сайті і натисніть на посилання "Забули пароль?". Введіть свою електронну пошту, і ми надішлемо вам інструкції щодо відновлення доступу до вашого акаунту. Це безпечно і займає всього кілька хвилин. Всі ваші дані будуть збережені, і ви зможете знову увійти в свій акаунт без проблем.</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="faq-question" data-toggle="collapse" data-target="#faq-9" aria-expanded="false" aria-controls="faq-9">9. Як звернутися до підтримки?</h6>
                            <div id="faq-9" class="collapse">
                                <p class="lead text-justify">Якщо у вас виникли будь-які питання або проблеми, ви можете звернутися до нашої служби підтримки через контактну форму на сайті. Окрім того, ви можете написати на нашу електронну пошту support@resumeai.com. Ми завжди готові допомогти і зазвичай відповідаємо протягом 24 годин. Наша команда працює без вихідних, щоб швидко реагувати на ваші запити та допомогти вирішити будь-які проблеми.</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="faq-question" data-toggle="collapse" data-target="#faq-10" aria-expanded="false" aria-controls="faq-10">10. Як працює алгоритм оптимізації резюме для роботів-сканерів?</h6>
                            <div id="faq-10" class="collapse">
                                <p class="lead text-justify">Алгоритм ResumeAI оптимізує ваше резюме, щоб воно відповідало вимогам роботів-сканерів, які часто використовуються в процесах відбору кандидатів. Ці роботи аналізують резюме, шукаючи ключові слова, що відповідають вакансії. Наша система забезпечує правильне форматування і вживання таких слів, що підвищує шанси, що ваше резюме буде обрано роботами і передано рекрутеру. Це важливий етап для успішного проходження автоматизованих систем відбору, що зараз є стандартом у багатьох компаніях.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <ul class="nav-sidebar sticky-sidebar">
                        <li><a class="smoothscroll" href="#faq-1">1. Як працює ResumeAI?</a></li>
                        <li><a class="smoothscroll" href="#faq-2">2. Чи безпечно використовувати ResumeAI?</a></li>
                        <li><a class="smoothscroll" href="#faq-3">3. Які функції пропонує ResumeAI?</a></li>
                        <li><a class="smoothscroll" href="#faq-4">4. Чи можна зберігати та редагувати своє резюме?</a></li>
                        <li><a class="smoothscroll" href="#faq-5">5. Як можна змінити або оновити своє резюме?</a></li>
                        <li><a class="smoothscroll" href="#faq-6">6. Чи є безкоштовний доступ до ResumeAI?</a></li>
                        <li><a class="smoothscroll" href="#faq-7">7. Чи можна використовувати ResumeAI для різних типів резюме?</a></li>
                        <li><a class="smoothscroll" href="#faq-8">8. Що робити, якщо я забув пароль?</a></li>
                        <li><a class="smoothscroll" href="#faq-9">9. Як звернутися до підтримки?</a></li>
                        <li><a class="smoothscroll" href="#faq-10">10. Як працює алгоритм оптимізації резюме для роботів-сканерів?</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
