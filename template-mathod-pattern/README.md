# template-method-pattern
In object-oriented programming, the template method is one of the behavioral design patterns identified by Gamma et al.[1] in the book Design Patterns. The template method is a method in a superclass, usually an abstract superclass, and defines the skeleton of an operation in terms of a number of high-level steps. These steps are themselves implemented by additional helper methods in the same class as the template method.

The helper methods may be either abstract methods, in which case subclasses are required to provide concrete implementations, or hook methods, which have empty bodies in the superclass. Subclasses can (but are not required to) customize the operation by overriding the hook methods. The intent of the template method is to define the overall structure of the operation, while allowing subclasses to refine, or redefine, certain steps.[2]


# الگوی طراحی متد قالبی
در برنامه‌نویسی شئ‌گرا، الگوی متد قالبی یکی از الگوهای طراحی رفتاری است که توسط اریک گاما و همکارانش تعریف شده‌است. در کتاب Design Patterns، متد قالبی، یک متد در یک ابرکلاس (Superclass) (معمولاً از نوع انتزاعی Abstract)، می‌باشد. این متد اسکلت یک عملیات را بر اساس تعدادی از مراحل سطح بالا تعریف می‌کند. این مراحل خود توسط متدهای کمکی اضافی در همان کلاس متد قالبی پیاده‌سازی می‌شوند.

متدهای کمکی ممکن است از نوع انتزاعی باشند، که در این حالت برای پیاده‌سازی تجریدی (Concrete) و واقعی آن‌ها نیاز است به یک زیرکلاس (Subclass) یا به متدهای قلاب (Hook methods)، که متدهایی با بدنهٔ خالی در کلاس پدر هستند. زیرکلاس‌ها می‌توانند با Override کردن متدهای Hook، عملیات مختص خود را شخصی‌سازی کنند. هدف متد قالبی تعریف ساختار کلی عملیات است، در عین این که به زیرکلاس‌ها اجازه بدهد مراحل خاصی از عملیات را اصلاح یا دوباره تعریف کنند.
