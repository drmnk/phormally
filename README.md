# Phormally

## Бэкенд-как-сервис для обработки форм.

### (Open-source аналог [Formspree](https://formspree.io/) на PHP).

> Это проект для портфолио, потому что мои предыдущие работы я, к сожалению, показать не могу. Но мне кажется, у него есть потенциал и на нём можно отработать очень много интересных технологий.

Да и посмотрите какое крутое название и домен был свободен!

![Пример работы](https://stately-cupcake-b0602a.netlify.app/phormally_example.png)

**Суть такая:** многим статическим сайтам (лендингам, блогам, визиткам) единственное, зачем нужен бекэнд - форма обратной связи. Да, есть огромная куча сервисов, которые с радостью предоставят форму в виде iframe или вообще предоставят её на своё домене - но это сильно рвёт UX, особенно если у нас очень красивая форма в цвет занавесок на сайте.

А ведь по факту нам не нужны чужие формы - мы можем сверстать свою, нам нужен только бэкенд, который примет все данные из реквеста с заданного домена, сохранит их в БД и отправит пользователю на почту. Этого достаточно для 95% юзкейсов. И даже можно это делать по AJAX.

Formspree так и работает - конечно он ещё принимает на платных тарифах файлы и платит за свой SMTP-сервер.

Но если обойтись без файлов и отправлять письма пользовательские SMTP - при небольших нагрузках обеспечение такого сервиса будет практически бесплатным.

> Конечно, это не будет полным аналогом. Это же проект для портфолио. Но мы очень постараемся.
> Текущий прогресс - в TODO.md

Как запустить:

```
git clone https://github.com/drmnk/phormally.git
cd phormally
make install
docker compose up

# Вы восхитительны! Phormally доступен на http://localhost:8000
```

> **Примечание:** если вы на Windows и не пользуетесь [Терминалом](https://apps.microsoft.com/store/detail/windows-terminal/9N0DX20HK701) - вы многое теряете, они сделали алиасы для практически всех линуксовых команд.

> **Примечание 2:** если вы на Windows и не пользуетесь [Chocolatey](https://chocolatey.org) - вы многое теряете. Устанавливайте программы в одну строчку, например `choco install make`

## Что мы в этом проекте отработаем в первую очередь

-   **Настройка среды разработки в Docker:** только разработку, я не хочу хостить это в докере. Настройкой рабочего окружения будет заниматься Laravel Forge. Конечно, можно воспользоваться Laravel Sail, но очень интересно будет настроить всё самому.
-   **Livewire:** я без ума от него. Делаем интерфейс реактивным прямо в PHP классах. Мы сможем сделать интерфейсы динамичными без кучи JS.
-   **TailwindCSS:** и от него я тоже без ума. Сперва трудно втянуться, конечно, но распробовав - трудно оторваться. Пока, БЭМ, bang-bang.
-   **Очереди:** отправка писем - небыстрая задача. В очередь!
-   **Тестирование:** каюсь, раньше я не тестировал код. Я исправился, я стараюсь.

## Что будет здорово добавить чуть позже

-   **Интернационализация:** пахнуло коммунизмом, но по-моему процесс перевода приложений на другие языки называется так. У меня неплохо с английским, просто сейчас намного проще и быстрее состряпать всё на русском.
-   **Пользовательское API:** пока не знаю зачем, но, думаю, мы сможем обосновать потребность.
-   **GraphQL для чего-нибудь:** раз уж у нас есть такой прекрасный Lighthouse для Laravel, мы должны его опробовать

## Что будет здорово попробовать

-   Провести бенчмарк при реальной нагрузке с внешним безлимитным SMTP-сервером, чтобы обнаружить "отсечку". После этого засунуть приложение в **Octane** и попробовать снова.
-   Разместить на **Vapor**- не играл с AWS, нужно сделать.
