global moyenne

moyenne:
		load_b 0		;
		load_c_adrb 		;
		load_a 0		;
		load_b_c		;
		jmpnz loop		;
		load_c_adrb		;
		load_b_c		;
		div_a_b			;

loop:
		load_c_adrb		;
		add_a_c			;
		dec_b			;
		jmpnz loop		;

		
		
		
