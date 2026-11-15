export type UserRole = 'customer' | 'staff' | 'admin';

export type User = {
    id: number;
    name: string;
    email: string;
    avatar?: string;
    role: UserRole;
    phone: string | null;
    address_line: string | null;
    city: string | null;
    postal_code: string | null;
    country: string | null;
    email_verified_at: string | null;
    created_at: string;
    updated_at: string;
    [key: string]: unknown;
};

export type Auth = {
    user: User;
};