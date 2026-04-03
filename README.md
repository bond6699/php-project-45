# PHP Project 45 - Игры разума

[![Hexlet Tests and Linter Status](https://github.com/bond6699/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/bond6699/php-project-45/actions/workflows/hexlet-check.yml)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=bond6699_php-project-45&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=bond6699_php-project-45)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=bond6699_php-project-45&metric=bugs)](https://sonarcloud.io/summary/new_code?id=bond6699_php-project-45)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=bond6699_php-project-45&metric=code_smells)](https://sonarcloud.io/summary/new_code?id=bond6699_php-project-45)
[![Duplicated Lines (%)](https://sonarcloud.io/api/project_badges/measure?project=bond6699_php-project-45&metric=duplicated_lines_density)](https://sonarcloud.io/summary/new_code?id=bond6699_php-project-45)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=bond6699_php-project-45&metric=sqale_rating)](https://sonarcloud.io/summary/new_code?id=bond6699_php-project-45)

Коллекция математических игр для тренировки ума в командной строке.

## 🎮 Игры

| Игра | Описание | Команда |
|------|----------|---------|
| Brain Even | Определите, является ли число чётным | `make brain-even` |
| Brain Calc | Вычислите результат арифметического выражения | `make brain-calc` |
| Brain GCD | Найдите наибольший общий делитель двух чисел | `make brain-gcd` |
| Brain Progression | Найдите пропущенное число в арифметической прогрессии | `make brain-progression` |
| Brain Prime | Определите, является ли число простым | `make brain-prime` |

## 📋 Требования

- **Операционная система**: Linux, macOS, WSL
- **PHP**: версия 8.2 или выше
- **Make**: утилита для автоматизации сборки
- **Git**: система контроля версий

## 🚀 Установка

```bash
# Клонируйте репозиторий
git clone git@github.com:bond6699/php-project-45.git

# Перейдите в директорию проекта
cd php-project-45

# Установите зависимости
make install
```

## 🎯 Как играть

1. Запустите любую игру с помощью команды `make <game-name>`
2. Прочитайте вопрос и введите свой ответ
3. Для победы необходимо дать 3 правильных ответа подряд
4. При неправильном ответе игра завершится и покажет правильный ответ

## 📸 Примеры игр

### Brain Even
[![Brain Even Demo](https://asciinema.org/a/m3frGp3VMzfRBeLp.svg)](https://asciinema.org/a/m3frGp3VMzfRBeLp)

### Brain Calc
[![Brain Calc Demo](https://asciinema.org/a/itQh4VhqNUTqc2he.svg)](https://asciinema.org/a/itQh4VhqNUTqc2he)

### Brain GCD
[![Brain GCD Demo](https://asciinema.org/a/Nlsmlbm3ymDcfTpA.svg)](https://asciinema.org/a/Nlsmlbm3ymDcfTpA)

### Brain Progression
[![Brain Progression Demo](https://asciinema.org/a/ad1o6DeKt9OrwlgY.svg)](https://asciinema.org/a/ad1o6DeKt9OrwlgY)

### Brain Prime
[![Brain Prime Demo](https://asciinema.org/a/W5dx1iKL8PRy57dv.svg)](https://asciinema.org/a/W5dx1iKL8PRy57dv)

## 🛠️ Доступные команды Make

```bash
make install      # Установка зависимостей
make brain-even   # Запуск игры "Чётное/Нечётное"
make brain-calc   # Запуск игры "Калькулятор"
make brain-gcd    # Запуск игры "НОД"
make brain-progression # Запуск игры "Арифметическая прогрессия"
make brain-prime  # Запуск игры "Простое число"
make validate     # Проверка кода (если настроено)
make lint         # Запуск линтера (если настроено)
```

## 📊 Качество кода

Проект поддерживает высокое качество кода с помощью:
- **GitHub Actions** - автоматическое тестирование
- **SonarCloud** - статический анализ кода
- **PHP_CodeSniffer** - проверка соответствия стандартам кодирования

## 📝 Лицензия

Этот проект является учебным и создан в рамках обучения в [Hexlet](https://hexlet.io).

## 🤝 Вклад в проект

Проект является учебным, но предложения по улучшению приветствуются. Создавайте Issue или Pull Request!

---

⭐ Поставьте звезду, если вам понравился проект!
```