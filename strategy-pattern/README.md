# strategy-pattern
In computer programming, the strategy pattern (also known as the policy pattern) is a behavioral software design pattern that enables selecting an algorithm at runtime. Instead of implementing a single algorithm directly, code receives run-time instructions as to which in a family of algorithms to use.[1]

Strategy lets the algorithm vary independently from clients that use it.[2] Strategy is one of the patterns included in the influential book Design Patterns by Gamma et al.[3] that popularized the concept of using design patterns to describe how to design flexible and reusable object-oriented software. Deferring the decision about which algorithm to use until runtime allows the calling code to be more flexible and reusable.

For instance, a class that performs validation on incoming data may use the strategy pattern to select a validation algorithm depending on the type of data, the source of the data, user choice, or other discriminating factors. These factors are not known until run-time and may require radically different validation to be performed. The validation algorithms (strategies), encapsulated separately from the validating object, may be used by other validating objects in different areas of the system (or even different systems) without code duplication.


# الگوی استراتژی

در برنامه‌نویسی کامپیوتر الگوی استراتژی (همچنین به عنوان الگوی سیاست شناخته می‌شود) است یک الگوی طراحی نرم‌افزار رفتاری است که قابلیت انتخاب یک الگوریتم در زمان اجرا را ممکن می‌سازد. الگوی استراتژی:

یک خانواده ازالگوریتم‌ها را معرفی می‌کند
هر الگوریتم را کپسوله می‌کند و
باعث می‌شود الگوریتم‌های آن خانواده به‌طور قابل تعویض قابل استفاده باشند.
الگوی استراتژی اجازه می‌دهد تا الگوریتم‌های متفاوت به‌طور مستقل از مشتریان استفاده‌کننده اجرا شوند.[۱] الگوی استراتژی یکی از الگوهای موجود در کتاب مشهور الگوهای طراحی است که توسط گاما و دیگران نوشته شده‌است و مفهوم استفاده از الگوهای طراحی برای توصیف نحوه طراحی انعطاف‌پذیر و قابل استفاده مجدد شی گرا در نرم‌افزار را محبوب ساخت.

زمانی که چند راه یا بهتر بگوییم چند الگوریتم مختلف برای انجام تَسکی یکسان داشته باشیم که اپلیکیشن مد نظر باید یکی از این روش‌ها را در حین اجرا و بر اساس پارامترهای خاصی انتخاب کند، باید از این دیزاین پترن استفاده نماییم (برای مثال، فرض کنید که چند الگوریتم مرتب‌سازی داریم و بر اساس تعداد عناصر یک آرایه، الگوریتمی انتخاب خواهد شد که منجر به بهبود پرفورمنس اپلیکیشن شود.)
