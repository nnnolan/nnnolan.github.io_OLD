    // k&r excersies 1.1-1.4


    #include <stdio.h>
    int main()
    
    printf("title: c/n"

    float fahr, celsius;
    int lower, upper, step;

    lower = 0;
    upper = 300;
    step = 1;

    fahr = lower;
    while(lower <= upper)
    {
        celsius = (5.0/9.0) * (fahr - 32.0);
        printf("%3.0f %6.1f\n", fahr, celsius);
        fahr = fahr + step;
    }

    return 0;
    }