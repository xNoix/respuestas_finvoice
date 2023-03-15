const odd_number_by_range = (start_rage, end_range) => {
    
    for(i = start_rage; i < end_range; i++) {
        
        if (i%2 != 0) {
            console.log(i);
        }
    }
}

odd_number_by_range(100, 150);

// o si quieren hacerlo de forma directa

const odd_number_between_100_and_150 = () => {
    
    for(i = 100; i < 150; i++) {
        
        if (i%2 != 0) {
            console.log(i);
        }
    }
}